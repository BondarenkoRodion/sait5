<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ProductTag;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{

public function index(){
    $products = Product::all();
    return view('product.index')->with('products', $products);
}

public function create(){
    $categories = Category::all();
    $tags = Tag::all();
    return view('product.create', compact('categories','tags'));
}

public function store(Request $req){
    $data = $req->validate([
        'productName' => 'required|string',
        'productDescription' => 'string',
        'productID' => 'required|string',
        'productSales' => '',
        'category_id' => '',
        'tags' => '',
    ]);
    $data['user_id'] = Auth::user()->id;
    
    $tags = isset($data['tags']) ? $data['tags'] : null;
    unset($data['tags']);

    $product = Product::create($data);
    $product->tags()->attach($tags);

    if($req->has('photos')){
        foreach($req->file('photos') as $photo){
            $photoName = $data['productName'].'-photo-'.time().rand(1,1000).'.'.$photo->extension();
            $photo->move(public_path('product_photos'),$photoName);
            Photo::create([
                'product_id'=>$product->id,
                'image'=>$photoName
            ]);
        }
        return redirect()->route('product.index')->with('success','Added');
    }
    return redirect()->route('product.index');
}

public function show(Product $product){
    $category = Category::findOrFail($product->category_id);
    return view('product.show', compact('product','category'));
}
   
public function edit(Product $product){
    $categories = Category::all();
    $tags = Tag::all();
    return view('product.edit', compact('product', 'categories','tags'));
}

public function update(Product $product){
    $data = request()->validate([
        'productName' => 'string',
        'productDescription' => 'string',
        'productID' => 'string',
        'productSales' => '',
        'category_id' => '',
        'tags' => '',
    ]);
    $tags = $data['tags'];
    unset($data['tags']);

    $product->update($data);
    $product = $product->fresh();
    $product->tags()->sync($tags);
    return redirect()->route('product.show', $product->id);
}

public function destroy(Product $product){
    $product->delete();
    return redirect()->route('product.index');
}



public function photos($id){
    $product = Product::find($id);
    if(!$product) abort(404);
    $photos = $product->photos;
    return view('product.photos',compact('product','photos'));
}

public function list(){
    $products = Product::all();
    return view('product.list')->with('products', $products);
}
}