<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function getCURL()
     {
         $response = Curl::to('https://jsonplaceholder.typicode.com/posts')
                             ->get();

         dd($response);
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
