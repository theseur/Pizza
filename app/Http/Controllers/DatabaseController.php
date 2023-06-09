<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



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

    public function save_the_comment(Request $request)
    {
        date_default_timezone_set('Europe/Budapest');
        $time = time();
        $actual_time = date('y-m-d G:i:s', $time);
        $id_max = DB::table('comments')->max('id');
        $new_id_to_insert = $id_max + 1;
        Comment::insert(['id' => $new_id_to_insert, 'comment' => $request->text_box, 'userid' => 1, 'dateofwriting' =>$actual_time]);
        return view('pizza_order');
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

    public function userlogin(Request $request)
    {
        if (!Auth::check()) 
        {
            return Redirect::to('failedlogin');

        }
         
        else{
            $datas = DB::table('users')->get();
            //var_dump($datas);
            return view("userlist", compact("datas"));
            }

    

    }

    public function failedlogin ()
    {
        return view("failedloginpage");

    }
    public function get_users()
    {
       
        $datas = DB::table('users')->get();
        return view("userlist", compact("datas"));

    }
    public function edit_users(Request $request, $pizzaid=0)
    {
        $pizza = DB::table('users')->where('name','=',$pizzaid )->first();
        return view('editusers', compact("pizza"));

    }
    public function modify_users(Request $request, $pizzaid=0)
    {
        $pizza = DB::table('users')->where('name','=',$pizzaid ) 
        ->update(array
        ('name'=>$_POST["name"],'email'=>$_POST["email"],
        'password'=>$_POST["password"],
        'admin'=>array_key_exists('admin',$_POST)?1:0,
        'hidden'=>array_key_exists('hidden',$_POST)?1:0
        ));

        //var_dump($_POST);
        return Redirect::to('/users');
        

    }
    public function delete_users(Request $request, $pizzaid=0)
    {
        
        $pizza = DB::table('users')->where('name','=',$pizzaid )
        ->update(array
        ('name'=>$_POST["name"],'email'=>$_POST["email"],
        'password'=>$_POST["password"],
        'admin'=>array_key_exists('admin',$_POST)?1:0,
        'hidden'=>1
        ));
        return Redirect::to('/users');
        //return $pizzaid;
    }

    public function create_realuser()
    {
        return view("createusers");

    }

    public function insert_users()
    {
        $pizza = DB::table('users')->where('name','=',$_POST["name"] ) ->count();
        if($pizza==0)
        {
            $values = array('name'=>$_POST["name"],'email'=>$_POST["email"],
            'password'=>$_POST["password"],
            'admin'=>array_key_exists('admin',$_POST)?1:0,
            'hidden'=>array_key_exists('hidden',$_POST)?1:0);
            $pizza = DB::table('pizza')->insert($values);
            return Redirect::to('/users');

        }

        else
        {
            return view("userexists");


        }
        //var_dump($_POST);

    }
    public function adminfrontpage()
    {
        return view("adminfrontpage");
    }
    public function get_orders()
    {
       
        //$datas = DB::table('order')->paginate(15);
        $datas=Order:: paginate(15);
        return view("orderlist", compact("datas"));

    }
     public function userfrontpage()
    {
        return view("userfrontpage");
    }
    
    public function get_categories()
    {
       
        $datas = DB::table('category')->get();
        //var_dump($datas);
        return view("categorylist", compact("datas"));
    }
    public function edit_categories(Request $request, $pizzaid=0)
    {
        $pizza = DB::table('category')->where('pname','=',$pizzaid )->first();
        return view('editcategories', compact("pizza"));
    }
    
    public function modify_categories(Request $request, $pizzaid=0)
    {
       $catprice=(int)$_POST["price"];
       $pizza = DB::table('category')->where('id','=',$pizzaid ) 
        ->update(array
        ('pname'=>$_POST["pname"],'price'=>$catprice));
        /*var_dump($_POST);
        echo "<br>";
        var_dump($catprice);*/
        return Redirect::to('/categories');
        
    }
    public function delete_categories(Request $request, $pizzaid=0)
    {
        
        $pizza = DB::table('category')->where('pname','=',$pizzaid ) ->delete();
        return Redirect::to('/categories');
        //return $pizzaid;
    }
    public function create_categories()
    {
        return view("createcategory");
    }
    public function insert_categories()
    {
        $pizza = DB::table('category')->where('pname','=',$_POST["pname"] ) ->count();
        if($pizza==0)
        {
            $catprice=(int)$_POST["price"];
            $values = array('pname' => $_POST["pname"],'price'=>$catprice);
            $pizza = DB::table('category')->insert($values);
            return Redirect::to('/categories');
        }
        else
        {
            return view("categoryexists");
        }
        //var_dump($_POST);
    }
    public function get_comments()
    {
       
        $datas = DB::table('comments')->get();
        return view("commentslist", compact("datas"));
    }
    public function create_comments()
    {
        return view("createcomments");

    }
    public function edit_comments(Request $request, $pizzaid=0)
    {
        $pizza = DB::table('comments')->where('id','=',$pizzaid )->first();
        return view('editcomments', compact("pizza"));
    }

    public function modify_comments(Request $request, $pizzaid=0)
    {
       
       $pizza = DB::table('comments')->where('id','=',$pizzaid ) 
        ->update(array
        ('comment'=>$_POST["comment"]));
        /*var_dump($_POST);
        echo "<br>";
        var_dump($catprice);*/
        return Redirect::to('/comments');
        
    }
    public function delete_comments(Request $request, $pizzaid=0)
    {
        
        $pizza = DB::table('comments')->where('id','=',$pizzaid ) ->delete();
        return Redirect::to('/comments');
        //return $pizzaid;
    }
    public function insert_comments()
    {
        $commId=(int)$_POST["id"];
        $pizza = DB::table('comments')->where('id','=',$commId ) ->count();
        if($pizza==0)
        {
            $values = array('comment' => $_POST["comment"]);
            $pizza = DB::table('comments')->insert($values);
            return Redirect::to('/comments');
        }
        else
        {
            return view("commentexists");
        }
        //var_dump($_POST);
    }
    
    

}
