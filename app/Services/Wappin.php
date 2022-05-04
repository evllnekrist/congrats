<?php 

namespace App\Services;

use App\Http\Models\Invitation\WeddingInvites;
use App\Http\Models\Invitation\WeddingRSVP;
use App\Http\Models\Invitation\Wedding;
use Carbon\Carbon;
use File;
use Illuminate\Support\Facades\Log;

class Wappin{

    public static function getToken(){

        $path = "/v1/token/get";
        $payload = null;

        $username = config('app.api_wa.username');
        $password = config('app.api_wa.password');
        $token = base64_encode($username.':'.$password);

        $header = array(
            'Content-Type: application/json',
            'Authorization: Basic '.$token
        );

        $response = postRequest($path,$payload,$header);
        
        return $response;
        
    }

    public static function sendNotification($phone){

        $path = "/v1/message/do-send-hsm";

        $response_token = self::getToken();

        if($response_token->status == '200'){
            $token = $response_token->data->access_token;
            $header = array(
                'Content-Type: application/json',
                'Authorization: Bearer '.$token
            );
            
            $payload = array();

            $payload['client_id'] = config('app.api_wa.username');

            //Payload params
            $guest = WeddingInvites::where('wa_number',$phone)->with([
                'wedding',
                'event_map',
                'wedding.event'])
                ->first();
            //dd($guest);
            if($guest != null){
                
                $payload['project_id'] = $guest->wedding->project_id;
                $payload['type'] = $guest->wedding->type;
                $payload['recipient_number'] = $phone;
                $payload['language_code'] = $guest->wedding->language;

                $payload['params'] = array();
                $n = 1;
                $payload['params'][strval($n++)] = $guest->name;
                $payload['params'][strval($n++)] = $guest->wedding->groom_name_full;
                $payload['params'][strval($n++)] = $guest->wedding->bride_name_full;
                $temp_event = '';
                foreach($guest->wedding->event as $event){
                    $datetime = $event->date." ".$event->time;
                    $date = Carbon::parse($datetime)->locale('id');
                    $date->settings(['formatFunction' => 'translatedFormat']);
                    $temp_event .= $event->title.'\n';
                    $temp_event .= 'Waktu : '.$date->format('l, j F Y ; h:i a').'\n';
                    $temp_event .= 'Tempat : '.$event->place_name.'\n';
                    $temp_event .= 'Alamat : '.$event->place_address.'\n\n';
                }
                $payload['params'][strval($n++)] = $temp_event;
                $link = config('app.app_url')."/w/".$guest->wedding->code."?i=".rawurlencode($guest->name).'&rsvp=1';
                $payload['params'][strval($n++)] = $link;

                //Optional
                /*

                $payload['button'] = array();
                $payload['button']['url'] = '';
                $payload['button']['reply_payload'] = array();
                $payload['button']['reply_payload']["1"] = "1";
                $payload['button']['reply_payload']["2"] = "2";
                $payload['button']['reply_payload']["3"] = "3";

                $payload['header'] = array();
                $payload['header']['param'] = ''

                */

                $payload = json_encode($payload);
                $response = postRequest($path, $payload, $header);

                if($response->status == '200'){
                    WeddingInvites::where('wa_number',$phone)->update([
                        'status'=>'sent',
                        'message_id'=>$response->message_id
                    ]);
                    return array(
                        'status'=>'success',
                        'message'=>'Successfully Sent'
                    );
                }else{
                    WeddingInvites::where('wa_number',$phone)->update(['status'=>'error_sent']);
                    if(isset($response->message)){
                        return array(
                            'status'=>'error',
                            'message'=>'Something went wrong'
                        );
                    }else{
                        return array(
                            'status'=>'error',
                            'message'=>$response->message
                        );
                    }
                }
            }else{
                return array(
                    'status'=>'error',
                    'message'=>'Guest is not exist'
                );
            }
        }else{
            if(isset($response_token->message)){
                return array(
                    'status'=>'error',
                    'message'=>'Something went wrong'
                );
            }else{
                return array(
                    'status'=>'error',
                    'message'=>$response->message
                );
            }
        }
    }

    public static function sendNotificationMedia($phone){

        $path = "/v1/message/do-send-hsm";

        $response_token = self::getToken();

        if($response_token->status == '200'){
            $token = $response_token->data->access_token;

            $header = array(
                "Content-Type: multipart/form-data",
                'Authorization: Bearer '.$token
            );
            
            $payload = array();

            $payload['client_id'] = config('app.api_wa.username');

            //Payload params
            $guest = WeddingInvites::where('wa_number',$phone)->with([
                'wedding',
                'event_map',
                'wedding.event'])
                ->first();
            //dd($guest);
            if($guest != null){
                
                $dir = public_path($guest->wedding->thumbnail);
                $cFile = curl_file_create($dir);

                $payload['media'] = $cFile;
                $payload['project_id'] = $guest->wedding->project_id;
                $payload['type'] = $guest->wedding->type;
                $payload['recipient_number'] = $phone;
                $payload['language_code'] = $guest->wedding->language;

                $payload['params'] = array();
                $n = 1;
                $payload['params'][strval($n++)] = $guest->name;
                $payload['params'][strval($n++)] = $guest->wedding->groom_name_full;
                $payload['params'][strval($n++)] = $guest->wedding->bride_name_full;
                $temp_event = '';
                foreach($guest->wedding->event as $event){
                    $datetime = $event->date." ".$event->time;
                    $date = Carbon::parse($datetime)->locale('id');
                    $date->settings(['formatFunction' => 'translatedFormat']);
                    $temp_event .= $event->title.'\n';
                    $temp_event .= 'Waktu : '.$date->format('l, j F Y ; h:i a').'\n';
                    $temp_event .= 'Tempat : '.$event->place_name.'\n';
                    $temp_event .= 'Alamat : '.$event->place_address.'\n\n';
                }
                $payload['params'][strval($n++)] = $temp_event;
                $link = config('app.app_url')."/w/".$guest->wedding->code."?i=".rawurlencode($guest->name).'&rsvp=1';
                $payload['params'][strval($n++)] = $link;

                //Optional
                /*

                $payload['button'] = array();
                $payload['button']['url'] = '';
                $payload['button']['reply_payload'] = array();
                $payload['button']['reply_payload']["1"] = "1";
                $payload['button']['reply_payload']["2"] = "2";
                $payload['button']['reply_payload']["3"] = "3";

                $payload['header'] = array();
                $payload['header']['param'] = ''

                */

                $payload = json_encode($payload);
                $response = postRequest($path, $payload, $header);

                if($response->status == '200'){
                    WeddingInvites::where('wa_number',$phone)->update([
                        'status'=>'sent',
                        'message_id'=>$response->message_id
                    ]);
                    return array(
                        'status'=>'success',
                        'message'=>'Successfully Sent'
                    );
                }else{
                    WeddingInvites::where('wa_number',$phone)->update(['status'=>'error_sent']);
                    if(isset($response->message)){
                        return array(
                            'status'=>'error',
                            'message'=>'Something went wrong'
                        );
                    }else{
                        return array(
                            'status'=>'error',
                            'message'=>$response->message
                        );
                    }
                }
            }else{
                return array(
                    'status'=>'error',
                    'message'=>'Guest is not exist'
                );
            }
        }else{
            if(isset($response_token->message)){
                return array(
                    'status'=>'error',
                    'message'=>'Something went wrong'
                );
            }else{
                return array(
                    'status'=>'error',
                    'message'=>$response->message
                );
            }
        }  
    }

    public static function messageInquiry(){
        Log::info('Start Message Inquiry');

        $path = "/v1/message/do-send-hsm";

        $response_token = self::getToken();
        //Gatau mesti beda" token atau bisa pakai token yang sama

        if($response_token->status == '200'){
            $token = $response_token->data->access_token;
            $invites = WeddingInvites::where('status','!=','read')->get();
            foreach($invites as $invite){
                $payload['message_id'] = $invite->message_id;
                $payload = json_encode($payload);

                $response = postRequest($path, $payload, $header);

                if($response->status == '200'){
                    $len = count($response->data);
                    $status = $response->data[$len-1]->status;

                    WeddingInvites::where('message_id',$invite->message_id)->update([
                        'status'=>$status
                    ]);
                    return array(
                        'status'=>'success',
                        'message'=>'Successfully Updated'
                    );
                }else{
                    WeddingInvites::where('message_id',$invite->message_id)->update(['status'=>'error_sent']);
                    if(isset($response->message)){
                        return array(
                            'status'=>'error',
                            'message'=>'Something went wrong'
                        );
                    }else{
                        return array(
                            'status'=>'error',
                            'message'=>$response->message
                        );
                    }
                }
            }
        }

        Log::info('End Message Inquiry');

    }
}

?>