<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;
class ItemsController extends Controller
{
    public function GetItems(Request $request){
      vardump($request);
        // try {
        //     $data = Redis::get('data');
        // } catch (Exception $e) {
        //
        // }

    }
}
