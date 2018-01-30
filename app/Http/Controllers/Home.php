<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pizza;
use App\SubCategory;
use App\Category;
class Home extends Controller
{
  public function show()
  {
    $cat=Category::all();
    $subcate=SubCategory::all();
    $pizza=Pizza::all();
    if(Auth::user()){
    $offer=Auth::user()->products;
    return view('home.home',compact('cat','subcate','pizza','offer'));}
    else{
      return view('home.home',compact('cat','subcate','pizza'));
    }
  }
  public function allfood($id)
  {
    $cat=Category::all();
    $subcate=SubCategory::all();
    $sub=SubCategory::find($id);
    $pizza=Pizza::where('sub_id','=',$id)->get();
    if(Auth::user()){
    $offer=Auth::user()->products;
    return view('home.food',compact('cat','subcate','pizza','sub','offer'));}
    else{
      return view('home.food',compact('cat','subcate','pizza','sub'));
    }
  }
  public function food($id)
  {
    $cat=Category::all();
    $subcate=SubCategory::all();
    $pizza=Pizza::find($id);
    $offer;
    if(Auth::user()){
    $offer=Auth::user()->products;
    return view('home.product',compact('cat','subcate','pizza','offer'));}
    else{
      return view('home.product',compact('cat','subcate','pizza'));
    }
  }
  public function size(Request $request)
  {
    $pizza=Pizza::find($request->id);
    if($request->size=="sm"){
      return response()->json($pizza->small);
    }
    else if($request->size=="md"){
      return response()->json($pizza->medium);
    }
    else {
      return response()->json($pizza->larg);
    }
  }
}
