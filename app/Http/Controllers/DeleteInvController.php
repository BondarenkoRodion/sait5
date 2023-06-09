<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DeleteInvController extends Controller
{
    public function delete(Request $request)
    {
        $number = $request -> input('id');

        $row = Product::where('id', $number)->first();

        if($row){
            $row->delete();
            return redirect('/view');
        } else{
            return redirect('/add');
        }
        
    }
}
