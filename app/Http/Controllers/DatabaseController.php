<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function get_pizzas()
    {
       
        $datas = DB::table('pizza')->get();
        return view("pizzalist", compact("datas"));;

    }//
}
