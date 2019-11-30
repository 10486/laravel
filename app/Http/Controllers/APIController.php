<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;

class APIController extends Controller
{
  public function Chek(){
    try{
      $data = Redis::get('data');
      echo $data;
    }catch(Exeption $e){
      echo "все хуйня, давай по новой";
    }
    return "";
  }
  public function Update(){
    try{
      if(!(bool)Redis::get("running")){
        Redis::set("running",true);
        $this->UpdateData();
      }
    }catch(Exception $e){
      Redis::set("running",true);
      $this->UpdateData();
    }
    return "updating";
  }
  private function UpdateData(){
    //http://chelhack.deletestaging.com  ///goods ///error
    $data = json_decode(file_get_contents("http://chelhack.deletestaging.com/goods"));
    if($data['status']=='success'){
      Redis::set('data',json_encode($data));
    }
  }
  public function GetAPI(){
    Redis::set("something","some");
    $a = Redis::get("something");
    echo $a;
    return"";
  }
}
