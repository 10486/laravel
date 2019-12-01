<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;
class ItemsController extends Controller
{
    public function GetItems(Request $request){
        $page = $request->input('page');
        try {
            $data = Redis::get('data');
        } catch (Exception $e) {
          return "error";
        }
        $data = json_decode($data);
        $resp = [];
        for ($i=0; $i < 3; $i++) {
          $resp = $data[12 + $page*3+i];
        }
        return json_encode($resp);
    }
}
