<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AddInvController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'productName' => 'required',
            'productDescription' => 'required',
            'productID' => 'required',
            'productSales' => 'required',
        ]);

        Product::create($validatedData);
        return redirect('/add');
    }
}
