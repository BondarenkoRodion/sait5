<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function getSome(){
        //$s = new Some($id);
        //$s = $id;
        //return view('some',['Obj'=>$s]);
        //return view('some');
        return 'Ello your computer has virus';
    }
}
