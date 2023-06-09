<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ProductTag;
use Illuminate\Http\Request;

class TagController extends Controller
{

public function index(){
    $tags = Tag::all();
    return view('tag.index')->with('tags', $tags);
}

public function show(Tag $tag){
    return view('tag.show', compact('tag'));
}
}