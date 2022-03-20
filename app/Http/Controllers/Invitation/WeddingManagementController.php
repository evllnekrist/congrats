<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Invitation\Wedding;
use App\Http\Models\Invitation\WeddingRSVP;
use App\Http\Models\Invitation\WeddingWishes;
use Illuminate\Support\Facades\View;
use Yajra\Datatables\Datatables;
use DB;

class WeddingController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    public function outer_index($code){
        $event = 'Wedding';
        $subject_name = explode("-",$code);
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');
        $display_rsvp = (isset($_GET['rsvp'])?$_GET['rsvp']:'');

        if(sizeof($subject_name) > 1){
            return view('_invitation._wedding._page.'.$subject_name[0]."-".$subject_name[1].'-wrap',[
                "thumbnail_icon"=> 'asset-wedding-bg/'.$subject_name[0]."-".$subject_name[1].'/images/thumbnail.jpg',
                "event"         => ucfirst($subject_name[0])." & ".ucfirst($subject_name[1])."'s ".$event." | ".env("APP_NAME", "BeritaBaik"),
                "code"          => $subject_name[0]."-".$subject_name[1],
                "url"           => url('/w/'.$code.'/inner?i='.$invited_name.'&rsvp='.$display_rsvp),
            ]);
        }
    }
    
    
    // ----------------------------------------------A.J.A.X--------------------------------------------
    public function ajax_send_rsvp(Request $request, $code){
        if($request->ajax()) {
            $subject_name = explode("-",$code);
            if(sizeof($subject_name) < 2){
                return array('status'=>false, 'message'=>'Code broken');
            }
            $code = $subject_name[0]."-".$subject_name[1];
            try{
                $item = $request->all();
                $item['code'] = $code;
                $msg = 'to send your RSVP';
                
                $id = WeddingRSVP::insertGetId($item);
                $output = array('status'=>true, 'message'=>'Success '.$msg, 'detail'=>$id);
            }catch(\Exception $e){
                $output = array('status'=>false, 'message'=>'Failed '.$msg, 'detail'=>$e);
            }
        }else{
            $output = array('status'=>false, 'message'=>' Request invalid');
        }
        return $output;
    }
    // ----------------------------------------------A.J.A.X--------------------------------------------end
}
