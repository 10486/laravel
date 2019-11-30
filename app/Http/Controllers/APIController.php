<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
  public function GetAPI(){
    echo file_get_contents("http://chelhack.deletestaging.com/goods");

    return "";
  }
}
