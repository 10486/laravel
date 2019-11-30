<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;

class APIController extends Controller
{
  public function GetAPI(){
    Redis::set("something","some");
    $a = Redis::get("something");
    echo $a;
    return"";
  }
}
