<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //
 public function test(){
    $a="1000";
    $b="200";
    $c=$a+$b;

    return view('welcome',compact('c'));
 }

public function showform(){
    return view('form');
}

public function calculate(Request $request){
    // 
  $number1=$request->num1;
  $number2=$request->num2;
  $sum=$number1+$number2;
  return view('welcome',compact('sum'));

}
}
