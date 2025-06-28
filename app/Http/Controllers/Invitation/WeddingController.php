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
use Symfony\Component\HttpKernel\Exception\HttpException;

class WeddingController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    public function outer_index($code){
        $subject_name = explode("-",$code);
        $event = isset($subject_name[2])?ucwords($subject_name[2]):'Wedding';
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');
        $display_rsvp = (isset($_GET['rsvp'])?$_GET['rsvp']:'');
        // dd(sizeof($subject_name));
        if(sizeof($subject_name) > 1){
            return view('_invitation._wedding._page.'.$subject_name[0]."-".$subject_name[1].'-wrap',[
                "thumbnail_icon"=> 'asset-wedding-bg/'.$subject_name[0]."-".$subject_name[1].'/images/thumbnail.webp',
                "event"         => ucfirst($subject_name[0])." & ".ucfirst($subject_name[1])."'s ".$event." | ".env("APP_NAME", "BeritaBaik"),
                "code"          => $subject_name[0]."-".$subject_name[1],
                "url"           => url('/w/'.$code.'/inner?i='.$invited_name.'&rsvp='.$display_rsvp),
            ]);
        }else{
          return view('_main._page.error',['lost'=>true]);
        }
    }
    public function inner_index($code){
        $subject_name = explode("-",$code);
        $event = isset($subject_name[2])?ucwords($subject_name[2]):'Wedding';
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');
        $display_rsvp = (isset($_GET['rsvp'])?$_GET['rsvp']:'');
        $addition_logic = array();
        if(array_key_exists(1, $subject_name)){
            foreach($subject_name as $key => $value){
                if($key > 1){
                    array_push($addition_logic,$value);
                }
            }
        }else{
          return view('_main._page.error',['lost'=>true]);
        }

        if(sizeof($subject_name) > 1){
            return view('_invitation._wedding._page.'.$subject_name[0]."-".$subject_name[1],[
                "thumbnail_icon"=> 'asset-wedding-bg/'.$subject_name[0]."-".$subject_name[1].'/images/thumbnail.webp',
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
    public function ajax_send_wish_and_rsvp(Request $request, $code){
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
    public function ajax_get_wish_v2(Request $request, $code){
        
        try {
            $data['filter']       = $request->all();
            $page                 = $data['filter']['_page']  = (@$data['filter']['_page'] ? intval($data['filter']['_page']) : 1);
            $limit                = $data['filter']['_limit'] = (@$data['filter']['_limit'] ? intval($data['filter']['_limit']) : 1000);
            $offset               = ($page?($page-1)*$limit:0);
            $data['products']     = WeddingWishes::where('code','=',$code);
            
            if($request->get('_search')){
                $data['products'] = $data['products']->whereRaw('(LOWER(title) LIKE "%'.strtolower($request->get('_search')).'%" OR LOWER(author) LIKE "%'.strtolower($request->get('_search')).'%")');
            }
            $data['products_count_total']   = $data['products']->count();
            $data['products']               = $data['products']->orderBy('created_at','DESC');
            $data['products']               = ($limit==0 && $offset==0)?$data['products']:$data['products']->limit($limit)->offset($offset);
            // $data['products_raw_sql']       = $data['products']->toSql();
            $data['products']               = $data['products']->get();
            $data['products_count_start']   = ($data['products_count_total'] == 0 ? 0 : (($page-1)*$limit)+1);
            $data['products_count_end']     = ($data['products_count_total'] == 0 ? 0 : (($page-1)*$limit)+sizeof($data['products']));
           return response()->json($data, 200);

        } catch(\Exception $exception) {
            throw new HttpException(400, "Invalid data : {$exception->getMessage()}");
        }
    }
    // ----------------------------------------------A.J.A.X--------------------------------------------end
}
