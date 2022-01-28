<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
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
                "event"     => ucfirst($subject_name[0])." & ".ucfirst($subject_name[1])."'s ".$event." | ".env("APP_NAME", "BeritaBaik"),
                "code"      => $subject_name[0]."-".$subject_name[1],
                "url"      => url('/w/'.$code.'/inner?i='.$invited_name.'&rsvp='.$display_rsvp)
            ]);
        }
    }
    public function inner_index($code){
        $event = 'Wedding';
        $subject_name = explode("-",$code);
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');
        $display_rsvp = (isset($_GET['rsvp'])?$_GET['rsvp']:'');
        $addition_logic = array();
        if(array_key_exists(2, $subject_name)){
            foreach($subject_name as $key => $value){
                if($key > 1){
                    array_push($addition_logic,$value);
                }
            }
        }

        if(sizeof($subject_name) > 1){
            return view('_invitation._wedding._page.'.$subject_name[0]."-".$subject_name[1],[
                "event"     => ucfirst($subject_name[0])." & ".ucfirst($subject_name[1])."'s ".$event." | ".env("APP_NAME", "BeritaBaik"),
                "code"      => $subject_name[0]."-".$subject_name[1],
                "invite"    => $invited_name,
                "display"   => ["rsvp" => $display_rsvp],
                "addition_logic" => $addition_logic,
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
    public function ajax_send_wish(Request $request, $code){
        $subject_name = explode("-",$code);
        if(sizeof($subject_name) < 2){
            return array('status'=>false, 'message'=>'Code broken');
        }
        $code = $subject_name[0]."-".$subject_name[1];
        if($request->ajax()) {
            try{
                $item = $request->all();
                $item['code'] = $code;
                $msg = 'to WISHES the groom & bride';
                
                $id = WeddingWishes::insertGetId($item);
                $output = array('status'=>true, 'message'=>'Success '.$msg, 'detail'=>$id);
            }catch(\Exception $e){
                $output = array('status'=>false, 'message'=>'Failed '.$msg, 'detail'=>$e);
            }
        }else{
            $output = array('status'=>false, 'message'=>' Request invalid');
        }
        return $output;
    }
    public function ajax_get_rsvp(Request $request, $code){
        $data = WeddingRSVP::where('code','=',$code)->orderBy('created_at','DESC')->get();
        return Datatables::of($data)->make(true);
    }
    public function ajax_get_wish(Request $request, $code){
        $data = WeddingWishes::where('code','=',$code)->orderBy('created_at','DESC')->get();
        return Datatables::of($data)->make(true);
    }
    // ----------------------------------------------A.J.A.X--------------------------------------------end
}
