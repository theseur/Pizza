<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;

class DatabaseController extends Controller
{
    public function read_category()
    {
        $datas = DB::table('category')->get();
        // It's correct too: $workers = DB::select('select * from workers Where age<38');
          return ($datas);
      }

    public function read_pizza()
    {
        $datas = DB::table('pizza')->get();
        // It's correct too: $workers = DB::select('select * from workers Where age<38');
          return ($datas);
      }

    

    public function create_order(Request $request)
    {
        $time = time();
        $actual_time = date('y-m-d G:i:s', $time);
        $id_max = DB::table('order')->max('id');
        $new_id_to_insert = $id_max + 1;
        Order::insert(['pizzaname' => $request->pizzaname, 'amount' => $request->amount, 'id' => $new_id_to_insert, 'taken' => $actual_time, 'dispatched' => $request -> dispatched]);
        return view('main');

    }

    public function create_pizza_order(Request $request)
    {
        date_default_timezone_set('Europe/Budapest');
        $time = time();
        $actual_time = date('y-m-d G:i:s', $time);
        $id_max = DB::table('order')->max('id');
        $new_id_to_insert = $id_max + 1;
        $ordered_datas = array('pizza_name' => $request->choosed_pizza, 'pizza_amount' => $request->pizza_amount);
        Order::insert(['pizzaname' => $request->choosed_pizza, 'amount' => $request->pizza_amount, 'id' => $new_id_to_insert, 'taken' => $actual_time, 'dispatched' => $request -> dispatched]);
        
        return view('ordered_pizza', $ordered_datas);

       
    }
    public function get_pizzas()
    {
       
        $datas = DB::table('pizza')->get();
        return view("pizzalist", compact("datas"));

    }

    public function edit_pizzas(Request $request, $pizzaid=0)
    {
        $pizza = DB::table('pizza')->where('pname','=',$pizzaid )->first();
        return view('editpizza', compact("pizza"));

    }
    public function modify_pizzas(Request $request, $pizzaid=0)
    {
        $pizza = DB::table('pizza')->where('pname','=',$pizzaid ) 
        ->update(array
        ('pname'=>$_POST["pname"],'categoryname'=>$_POST["categoryname"],
        'vegetarian'=>array_key_exists('vegetarian',$_POST)?1:0
        ));

        //var_dump($_POST);
        return Redirect::to('/pizzas');
        

    }
    public function delete_pizzas(Request $request, $pizzaid=0)
    {
        
        $pizza = DB::table('pizza')->where('pname','=',$pizzaid ) ->delete();
        return Redirect::to('/pizzas');
        //return $pizzaid;
    }

    public function create_pizza()
    {
        return view("createpizza");

    }

    public function insert_pizza()
    {
        $pizza = DB::table('pizza')->where('pname','=',$_POST["pname"] ) ->count();
        if($pizza==0)
        {
            $values = array('pname' => $_POST["pname"],'categoryname'=>$_POST["categoryname"], 
            'vegetarian'=>array_key_exists('vegetarian',$_POST)?1:0);
            $pizza = DB::table('pizza')->insert($values);
            return Redirect::to('/pizzas');

        }

        else
        {
            return view("pizzaexists");


        }
        //var_dump($_POST);

    }
    public function createuser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users,name|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $pizza = DB::table('users')->insert($validated);
       
        //var_dump($validated);
        return Redirect::to('/pizza_page');

    }

    

  




}
