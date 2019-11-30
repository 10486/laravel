<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
  public function GetAPI(){
    $cache = new Memcached;
    $memcache->connect('memcached', 11212) or die ("Could not connect");
    echo file_get_contents("https://chelhack.deletestaging.com/goods");
    return "";
  }
}
