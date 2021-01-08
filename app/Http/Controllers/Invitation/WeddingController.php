<?php

namespace App\Http\Controllers\Invitation;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Models\Invitation\WeddingWishes;
use Illuminate\Support\Facades\View;
use DB;

class WeddingController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    
    public function index($code){
        $event = 'Wedding';
        $subject_name = explode("-",$code);
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');

        if(sizeof($subject_name) > 1){
            return view('_invitation._wedding._page.'.$code,[
                "event" => ucfirst($subject_name[0])." & ".ucfirst($subject_name[1])."'s ".$event." | ".env("APP_NAME", "BeritaBaik"),
                "invited_name" => $invited_name,
            ]);
        }
    }
}
