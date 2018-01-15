<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProductModel;
class ProductController extends Controller
{
    public function controller(){
    	$name = 'Sok Nara';
    	return view('product.product-index')->with('name',$name);
    }




    public function model(){
    	$product = ProductModel::all();
    	$name = 'admin';
    	return view('product.product-index', compact('product'))->with('name',$name);
    }




    
}
