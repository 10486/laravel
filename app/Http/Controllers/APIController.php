<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;

class APIController extends Controller
{
  public function Check(){
    try{
      $data = Redis::get('data');
    }catch(Exception $e){
      echo "все плохо, давай по новой";
    }
    Redis::set('running',false);
    return "";
  }


  public function Laptops(){
    try{
      $data = json_decode(Redis::get('data'));
    }catch(Exception $e){
      $data = false;
    }
    if(!$data){
      return view('welcome',['success' => false,'items'=>[]]);
    }
    $tmp = [];
    foreach ($data->data as $item) {
      if ($item->category == 'Laptops') {
        $tmp[] = $item;
      }
    }
    return view('welcome',['success'=>true,'items'=>$tmp]);

  }


  public function Smartphones(){
    try{
      $data = json_decode(Redis::get('data'));
    }catch(Exception $e){
      $data = false;
    }
    if(!$data){
      return view('welcome',['success' => false,'items'=>[]]);
    }
    $tmp = [];
    foreach ($data->data as $item) {
      if ($item->category == 'Smartphones') {
        $tmp[] = $item;
      }
    }
    return view('welcome',['success'=>true,'items'=>$tmp]);

  }
  public function Update(){
    $data = false;
    try {
      $data = Redis::get('running');
    } catch (Exception $e) {
      Redis::set('running',true);
      $this->UpdateData();
      return "";
    }if(!$data){
      $this->UpdateData();
      return "";
    }return "";

    echo $this->UpdateData();
    return "";
  }
  public function main()
  {
    try{
      $data = json_decode(Redis::get('data'));
    }catch(Exception $e){
      $data = false;
    }
    if(!$data){
      return view('welcome',['success' => false,'items'=>[]]);
    }
    $tmp=[];
    for ($i=0; $i < 9; $i++) {
      try {
        $tmp[] = $data[$i];
      } catch (\Exception $e) {
        break;
      }

    }
    return view('welcome',['success'=>true,'items'=>$data->data]);
  }


  private function UpdateData(){
    //http://chelhack.deletestaging.com  ///goods ///error
    try{
      $data = file_get_contents("http://chelhack.deletestaging.com/goods");
    }catch(Exception $e){
      return "bla";
    }
    $data = json_decode($data);
    if($data->status=='Success'){
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
