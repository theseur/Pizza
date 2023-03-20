<?php
// Namespaces can be defined as a class of elements in which each element has a unique name
// to that associated class.
// https://www.tutorialspoint.com/laravel/laravel_namespaces.htm
namespace App\Http\Controllers;
class Controller2 extends Controller
// extends Controller: You can find the Controller.php file in the app\Http\Controllers\ folder.
// This is the predecessor class of the Controller classes (Object oriented programming)
{
public function print1()
{
echo "Hello2";
}
}