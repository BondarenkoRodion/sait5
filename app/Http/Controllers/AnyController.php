<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AnyController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return "Hello World";
    }
}