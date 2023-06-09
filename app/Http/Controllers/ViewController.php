<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{

public function index(){
    $data = Product::all();
    return view('product.indexcopy')->with('data', $data);
}
}
   
 