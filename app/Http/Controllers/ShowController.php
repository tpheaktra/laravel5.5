<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ShowModel;

class ShowController extends Controller
{
    public function show (){
    	//$product = ProductModel::all();
  		//echo "$product";
  		$show = ShowModel::all();
  		return view('datashow.show',compact('show'));

    }
}
