<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
  public function GetAPI(){
    $cache = new Memcache;
    $memcache->connect('memcached', 11212) or die ("Could not connect");
    while (true) {
      echo file_get_contents("http://chelhack.deletestaging.com/goods");
      sleep(600)
      // code...
    }

    return "";
  }
}
