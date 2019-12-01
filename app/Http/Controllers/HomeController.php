<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
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
}
