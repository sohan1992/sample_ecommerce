<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index(){
    	//$result  = DB::table('products')->get();
    	$data = \App\product::get();
    	//dd($result);
    	return view('welcome', ['products'=>$data]);

    	//singular table change name from phpmyadmin

    	//protected $table = 'product';
    }
}
