<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        return view('about', ['data' => 'Your Data Here']);
    }
    
}
