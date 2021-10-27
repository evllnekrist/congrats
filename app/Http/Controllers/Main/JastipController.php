<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Models\JastipBrand;
use App\Http\Models\Faq;
use Illuminate\Support\Facades\View;
use Yajra\Datatables\Datatables;
use DB;

class JastipController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    
    public function index(){
        $start_list         = 0;
        $limit_list         = 8;
        $brand_list_total   = JastipBrand::where('is_enabled',true)->count();
        $brand_list         = JastipBrand::where('is_enabled',true)->skip($start_list)->take($limit_list)->get();
        $faq_list           = Faq::where('type','jastip')->where('is_enabled',true)->orderBy('order','ASC')->get();
        $data               = [
            "start_list"        => $start_list,
            "limit_list"        => $limit_list,
            "brand_list_total"  => $brand_list_total,
            "brand_list"        => $brand_list,
            "faq_list"          => $faq_list
        ];
        // dd($data);
        return view('_main._page.home_jastip2',$data);
    }
    
    public function ajax_get_nextprev_page(Request $request){
        
        if($request->ajax()) {
            $item = $request->all(); 
        
            $start_list         = ($item['page_num']-1)*$item['limit_list'];
            $brand_list_total   = JastipBrand::where('is_enabled',true)->count();
            $brand_list         = JastipBrand::where('is_enabled',true)->skip($start_list)->take($item['limit_list'])->get();
            $until_list         = $start_list+sizeof($brand_list);
            $data               = [
                "start_list"        => $start_list,
                "until_list"        => $until_list,
                "brand_list_total"  => $brand_list_total,
                "brand_list"        => $brand_list,
            ];
            $output = array('status'=>true, 'message'=>'Success to retrieve next/prev page', 'detail'=>$data);
        }else{
            $output = array('status'=>false, 'message'=>' Request invalid');
        }
        return $output;
    }
}
