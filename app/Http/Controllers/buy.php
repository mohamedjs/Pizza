<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Pizza;
use App\SubCategory;
use App\Category;
use App\Bought;
use DB;
class buy extends Controller
{
    public function buy(Request $request)
    {
      $buy=new Bought();
      $buy->user_id=Auth::id();
      $buy->pizza_id=$request->product_id;
      $buy->price=$request->price;
      $buy->save();
      return response()->json($buy);
    }

    public function deletbuy(Request $request)
    {

    }
    public function allbuy()
    {
      $all=DB::table('boughts')
              ->join('users', 'boughts.user_id', '=', 'users.id')
              ->join('pizzas', 'boughts.pizza_id', '=', 'pizzas.id')
              ->get();
      return view('admin.allbuy',compact('all'));
    }
}
