<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;

class APIController extends Controller
{
  public function Check(){
    try{
      $data = Redis::get('data');
      echo $data;
    }catch(Exeption $e){
      echo "все хуйня, давай по новой";
    }
    Redis::set('running',false);
    return "";
  }
  public function Update(){
    try{
      if(!(bool)Redis::get("running")){
        Redis::set("running",true);
        echo $this->UpdateData();
      }else{
        echo "ninada";
      }
    }catch(Exception $e){
      Redis::set("running",true);
      echo $this->UpdateData();
    }
    return "updating";
  }
  public function main()
  {
    try{
      $data = json_decode(Redis::get('data'));
    }catch(Exeption $e){
      $data = false;
    }
    if(!$data){
      return view('welcome',['success' => false]);
    }
    return view('welcome',['success'=>true,'items'=>$data]);

  }
  private function UpdateData(){
    //http://chelhack.deletestaging.com  ///goods ///error
    try{
      $data = json_decode(file_get_contents("http://chelhack.deletestaging.com/goods"));
    }catch(Exception $e){
      return "bla";
    }
    return json_encode($data);
    // if($data['status']=='success'){
    //   Redis::set('data',json_encode($data));
    // }
  }
  public function GetAPI(){
    Redis::set("something","some");
    $a = Redis::get("something");
    echo $a;
    return"";
  }

}
