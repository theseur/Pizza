<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ControllerViews extends Controller
{
    public function category_filter(Request $request)
    {
        return view('pizza_order', compact('request'));
    }
}
