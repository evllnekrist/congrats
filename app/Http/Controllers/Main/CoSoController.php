<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;

class CoSoController extends Controller
{
	public function __construct()
	{
		// parent::__construct();
    }
    
    public function index(){
        return view('_main._page.home_coso');
    }
}
