<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Invitation\Wedding;
use App\Http\Models\Invitation\WeddingRSVP;
use App\Http\Models\Invitation\WeddingWishes;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\View;
use Yajra\Datatables\Datatables;
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
    public function self_service_pre_index($code){
        try{
            $id = Crypt::decryptString($code);
            $selected = Wedding::where('id',$id)->first();
            if(!$selected){
                return view('_main._page.error',['broken'=>true, 'detail'=>'no data']);
            }else{
                return view('_invitation._wedding_management._page.'.'self_service_pre');
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
                                'link' => url('/wm/'.Crypt::encryptString($exist->id).'/ss-pre'),
                                'code' => $code
                            ));
            }
            try{
                $item['password']   = sha1(@$request->get('password').env('salt_secret'));
                $item['groom_name'] = @$request->get('name')['groom'];
                $item['bride_name'] = @$request->get('name')['bride'];
                $item['code'] = $code;
                
                $id = Wedding::insertGetId($item);
                $output = array('status'=>true, 'message'=>'Success '.$msg, 'detail'=>array(
                    'link' => url('/wm/'.Crypt::encryptString($id).'/ss-pre'),
                    'code' => $code
                ));
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
