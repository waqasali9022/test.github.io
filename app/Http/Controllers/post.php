<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post extends Controller
{
    

  public function create(Request $request){

   return $request -> all();

  }  
}
