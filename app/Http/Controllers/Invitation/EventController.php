<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Models\Invitation\Event;
use App\Http\Models\Invitation\EventRSVP;
use App\Http\Models\Invitation\EventWishes;
use Illuminate\Support\Facades\View;
use Yajra\Datatables\Datatables;
use DB;

class EventController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    public function outer_index($code){
        $event = 'Event';
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');
        $display_rsvp = (isset($_GET['rsvp'])?$_GET['rsvp']:'');
        $exist = Event::where('code',$code)->first();

        if($exist){
            return view('_invitation._event._page.'.$code.'-wrap',[
                "thumbnail_icon"=> 'asset-event-bg/'.$code.'/images/thumbnail.jpg',
                "event"         => $exist->name." | ".env("APP_NAME", "BeritaBaik"),
                "code"          => $code,
                "url"           => url('/e/'.$code.'/inner?i='.$invited_name.'&rsvp='.$display_rsvp),
            ]);
        }
    }
    public function inner_index($code){
        $event = 'event';
        $subject_name = explode("-",$code);
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');
        $display_rsvp = (isset($_GET['rsvp'])?$_GET['rsvp']:'');
        $addition_logic = array();
        $exist = Event::where('code',$code)->first();

        if(array_key_exists(1, $subject_name)){
            foreach($subject_name as $key => $value){
                if($key > 1){
                    array_push($addition_logic,$value);
                }
            }
        }

        if($exist){
            return view('_invitation._event._page.'.$code,[
                "thumbnail_icon"=> 'asset-event-bg/'.$code.'/images/thumbnail.webp',
                "event"     => $exist->name." | ".env("APP_NAME", "BeritaBaik"),
                "code"      => $code,
                "invite"    => $invited_name,
                "display"   => ["rsvp" => $display_rsvp],
                "addition_logic" => $addition_logic,
            ]);
        }
    }
    
    // ----------------------------------------------A.J.A.X--------------------------------------------
    public function ajax_send_rsvp(Request $request, $code){
        if($request->ajax()) {
            $exist = Event::where('code',$code)->first();
            if(!$exist){
                return array('status'=>false, 'message'=>'Code broken');
            }elseif($exist->rsvp_limit > 0){
              $current_total = Event::where('code',$code)->count();
              if($current_total >= $exist->rsvp_limit){
                return array('status'=>false, 'message'=>'Sorry, reservation cannot be made. The number of invitees has exceeded the capacity ('.$exist->rsvp_limit.')');
              }
            }
            
            $msg = 'to send your RSVP';
            try{
                $item = $request->all();
                $existAndSameName = EventRSVP::where('code',$code)->whereRaw('LOWER(`sender_name`) = ? ',[trim(strtolower($request->sender_name))])->first();
                if($existAndSameName){
                  $id = EventRSVP::where('code',$code)->whereRaw('LOWER(`sender_name`) = ? ',[trim(strtolower($request->sender_name))])->update(['sender_address' => $item['sender_address'],'sender_org' => $item['sender_org'],'attend' => $item['attend']]);
                  $output = array('status'=>true, 'message'=>'You have filled out this form before. Successfully updated your RSVP!', 'detail'=>$id);
                }else{
                  $item['code'] = $code;
                  $id = EventRSVP::insertGetId($item);
                  $output = array('status'=>true, 'message'=>'Success '.$msg, 'detail'=>$id);
                }
            }catch(\Exception $e){
                $output = array('status'=>false, 'message'=>'Failed '.$msg, 'detail'=>$e);
            }
        }else{
            $output = array('status'=>false, 'message'=>' Request invalid');
        }
        return $output;
    }
    public function ajax_send_wish(Request $request, $code){
        $exist = Event::where('code',$code)->first();
        if(!$exist){
            return array('status'=>false, 'message'=>'Code broken');
        }

        if($request->ajax()) {
            $msg = 'to send the whises';
            try{
                $item = $request->all();
                $existAndSameName = EventWishes::where('code',$code)->where('sender_name',$request->sender_name)->first();
                if($existAndSameName){
                  $id = EventWishes::where('code',$code)->where('sender_name',$request->sender_name)->update(['message' => $item['message']]);
                  $output = array('status'=>true, 'message'=>'You have sent wishes before. Your update is saved!', 'detail'=>$id);
                }else{
                  $item['code'] = $code;
                  $id = EventWishes::insertGetId($item);
                  $output = array('status'=>true, 'message'=>'Success '.$msg, 'detail'=>$id);
                }
            }catch(\Exception $e){
                $output = array('status'=>false, 'message'=>'Failed '.$msg, 'detail'=>$e);
            }
        }else{
            $output = array('status'=>false, 'message'=>' Request invalid');
        }
        return $output;
    }
    public function ajax_get_rsvp(Request $request, $code){
        $data = EventRSVP::where('code','=',$code)->orderBy('created_at','DESC')->get();
        return Datatables::of($data)->make(true);
    }
    public function ajax_get_wish(Request $request, $code){
        $data = EventWishes::where('code','=',$code)->orderBy('created_at','DESC')->get();
        return Datatables::of($data)->make(true);
    }
    // ----------------------------------------------A.J.A.X--------------------------------------------end
}
