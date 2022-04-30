<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;

class HomeController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    
    public function index(){
        return view('_main._page.home');
    }

    public function display_invitation_sample_page($parent_temp_id,$child_temp_id = null){
        if($parent_temp_id == null || $child_temp_id == null){
            return view('_main._page.error',['lost'=>true]);
        }
        if($parent_temp_id == 'g'){ // for glanz
            if(in_array($child_temp_id,['1','2','3','4','5','6','7','8'])){
                return view('_invitation._wedding._page_sample.template_glanz_wrap',[
                    "child_temp_id"=>$child_temp_id,
                    "url"=> url('/ws/temp-in/'.$parent_temp_id.'/'.$child_temp_id),
                ]);
            }else{
                return view('_main._page.error',['lost'=>true]);
            }
        }
    }

    public function display_invitation_sample_page_in($parent_temp_id,$child_temp_id){
        if($parent_temp_id == 'g'){ // for glanz
            return view('_invitation._wedding._page_sample.template_glanz_'.$child_temp_id,[]);
        }
    }
}
