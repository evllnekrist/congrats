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
        $invited_name = (isset($_GET['i'])?$_GET['i']:'');
        return view('_invitation._wedding._page.'.$code,[
            "invited_name" => $invited_name
        ]);
    }
}
