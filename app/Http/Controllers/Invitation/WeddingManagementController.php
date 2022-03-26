<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Invitation\Wedding;
use App\Http\Models\Invitation\WeddingRSVP;
use App\Http\Models\Invitation\WeddingWishes;
use App\Http\Models\Invitation\WeddingEvents;
use App\Http\Models\Invitation\WeddingLogs;
use App\Http\Models\SelectionList;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\View;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;

class WeddingManagementController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    public function create_link_index(){
        return view('_invitation._wedding_management._page.'.'create_link');
    }
    public function self_service_prep_index($code){
        try{
            $id = Crypt::decryptString($code);
            $selected = Wedding::where('id',$id)->first();
            if(!$selected){
                return view('_main._page.error',['broken'=>true, 'detail'=>'no data']);
            }else{
                $events     = WeddingEvents::where('wedding_id',$id)->orderBy('id','ASC')->where('is_enabled',true)->get();
                $events_len = sizeof($events->toArray());
                $logs       = WeddingLogs::where('wedding_id',$id)->orderBy('id','DESC')->skip(0)->take(10)->get();
                $ref_types  = SelectionList::where('type','WEDDING_REF_TYPE')->where('is_enabled',true)->get();
                $packages   = SelectionList::where('type','WEDDING_PACK')->where('is_enabled',true)->get();
                $langs      = SelectionList::where('type','WEDDING_LANG')->where('is_enabled',true)->get();
                return view('_invitation._wedding_management._page.'.'self_service_prep',[
                    'code'          => $code, 
                    'selected'      => $selected,
                    'events'        => $events,
                    'event_count'   => $events_len,
                    'logs'          => $logs,
                    'ref_types'     => $ref_types,
                    'packages'      => $packages,
                    'langs'         => $langs
                ]);
            }
        }catch(\Exception $e){
            return view('_main._page.error',['broken'=>true, 'detail'=>'payload is invalid']);
        }
    }
    
    
    // ----------------------------------------------A.J.A.X--------------------------------------------
    public function ajax_create_link(Request $request){
        if($request->ajax()) {
            $code   = implode('-',$request->get('name'));
            $msg    = 'store new code ['.$code.']';
            $exist  = Wedding::where('code',$code)->first();
            if($exist != null){
                return array('status'=>false, 'message'=>'Same wedding code [<strong>'.$code.'</strong>] exist. Please define unique groom & bride name combination',
                            'detail'=>array(
                                'link' => url('/wm/ss/'.Crypt::encryptString($exist['id']).'/prep'),
                                'code' => $code
                            ));
            }
            try{
                \DB::beginTransaction();
                $item['password']   = sha1(@$request->get('password').env('salt_secret'));
                $item['groom_name'] = @$request->get('name')['groom'];
                $item['bride_name'] = @$request->get('name')['bride'];
                $item['code'] = $code;
                
                $id = Wedding::insertGetId($item);
                $output = array('status'=>true, 'message'=>'Success '.$msg, 'detail'=>array(
                    'link' => url('/wm/ss/'.Crypt::encryptString($id).'/prep'),
                    'code' => $code
                ));
                \DB::commit();
            }catch(\Exception $e){
                $output = array('status'=>false, 'message'=>'Failed '.$msg, 'detail'=>$e);
                \DB::rollback();
            }
        }else{
            $output = array('status'=>false, 'message'=>' Request invalid');
        }
        return $output;
    }
    public function ajax_store_draft(Request $request,$hash_id){
        if($request->ajax()) {
            $id     = Crypt::decryptString($hash_id);
            $exist  = Wedding::where('id',$id)->first();
            if($exist == null){
                return array('status'=>false, 'message'=>'ID pengguna wedding management tidak terdaftar');
            }
            // try{
            //     \DB::beginTransaction();
                $msg                = '['.$exist->code.'] simpan draft persiapan undangan';
                $edit_count         = (@$exist->edit_count?($exist->edit_count+1):0);
                $save_header_param  = array(
                    'lang'                          => @$request->get('lang'),
                    'asset_link'                    => @$request->get('asset_link'),
                    'pref_theme'                    => @$request->get('theme'),
                    'audio'                         => @$request->get('audio'),
                    'quotes'                        => @$request->get('quotes'),
                    'client_note'                   => @$request->get('client_note'),
                    'package'                       => @$request->get('package'),
                    'ref_type'                      => @$request->get('ref_type'),
                    'ref_name'                      => @$request->get('ref_name'),
                    'is_display_wishes'             => @$request->get('is_display_wishes'),
                    'is_display_rsvp'               => @$request->get('is_display_rsvp'),
                    'is_display_qris'               => @$request->get('is_display_qris'),
                    'is_display_covid_protocol'     => @$request->get('is_display_covid_protocol'),
                    'is_display_timeline'           => @$request->get('is_display_timeline'),
                    'edit_count'                    => $edit_count,
                );
                if(@$request->get('publish_status')){
                    $save_header_param['publish_status'] = @$request->get('publish_status');
                }
                $save_header        = Wedding::where('id',$id)->update($save_header_param);
                if($save_header && @$request->get('events') && sizeof(@$request->get('events')) > 0){
                    $save_detail_events         = array();
                    $save_detail_events_param   = array();
                    $prev_all_event             = WeddingEvents::select('id')->where('wedding_id',$id)->where('is_enabled',true)->get()->toArray();
                    $prev_all_event_id          = array_column(@$prev_all_event?@$prev_all_event:array(),'id');
                    $current_active_event_id    = array_column(@$request->get('events')?@$request->get('events'):array(),'id');
                    $current_inactive_event_id  = array_diff($prev_all_event_id,$current_active_event_id);
                    // dump($prev_all_event_id);
                    // dump($current_active_event_id);
                    // dump($current_inactive_event_id);
                    // die();
                    foreach (@$current_inactive_event_id as $index2 => $item2){
                        $save_detail_events_to_inactive[$index2] = WeddingEvents::where('id',@$item2)->update(array(
                            'is_enabled'    => false,
                        ));
                    }
                    foreach (@$request->get('events') as $index => $item){
                        if(@$item['id']){ // update
                            $save_detail_events_param[$index]   = array(
                                'title'         => @$item['title'],
                                'place_name'    => @$item['place_name'],
                                'place_address' => @$item['place_address'],
                                'date'          => Carbon::parse(@$item['datetime'])->format('Y-m-d'),
                                'time'          => Carbon::parse(@$item['datetime'])->format('H:i:s'),
                                'live_stream'   => @$item['live_stream'],
                                'is_enabled'    => true,
                            );
                            if(@$item->place_gmap_target){
                                $save_detail_events_param[$index]['place_gmap_target'] = @$item->place_gmap_target;
                            }
                            if(@$item->place_gmap_embed){
                                $save_detail_events_param[$index]['place_gmap_embed'] = @$item->place_gmap_embed;
                            }
                            $save_detail_events[$index]         = WeddingEvents::where('id',@$item['id'])->update($save_detail_events_param[$index]);
                        }else{ // store
                            $save_detail_events[$index]                 = new WeddingEvents;
                            $save_detail_events[$index]['wedding_id']   = $id;
                            $save_detail_events[$index]['code']         = $exist->code;
                            $save_detail_events[$index]['title']        = @$item['title'];
                            $save_detail_events[$index]['place_name']   = @$item['place_name'];
                            $save_detail_events[$index]['place_address']= @$item['place_address'];
                            $save_detail_events[$index]['date']         = Carbon::parse(@$item['datetime'])->format('Y-m-d');
                            $save_detail_events[$index]['time']         = Carbon::parse(@$item['datetime'])->format('H:i:s');
                            $save_detail_events[$index]['live_stream']  = @$item['live_stream'];
                            $save_detail_events[$index]['is_enabled']   = true;
                            $save_detail_events[$index]->save();
                        }
                    }
                }
                
                $save_log   = $this->addLog('wm_store_draft',$id,$request->all(),null,'<b>'.$exist->code.'</b> menyimpan draft ke <b>'.$edit_count.'</b>');
                $output     = array('status'=>true, 'message'=>'Success '.$msg);
            //     \DB::commit();
            // }catch(\Exception $e){
            //     $output = array('status'=>false, 'message'=>'Failed '.$msg, 'detail'=>$e);
            //     \DB::rollback();
            // }
        }else{
            $output = array('status'=>false, 'message'=>' Request invalid');
        }
        return $output;
    }

    public function addLog($activity,$id,$req=null,$resp=null,$desc=''){
        $exist              = Wedding::where('id',$id)->first();
        $save               = new WeddingLogs;
        $save->wedding_id   = $id;
        $save->code         = $exist->code;
        $save->desc         = $desc;
        $save->activity     = $activity;
        $save->request      = $req?json_encode($req):null;
        $save->response     = $resp?json_encode($resp):null;
        return $save->save();
    }
    // ----------------------------------------------A.J.A.X--------------------------------------------end
}
