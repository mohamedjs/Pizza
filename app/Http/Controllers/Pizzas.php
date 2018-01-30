<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\PizzaFormRequest;
use App\Pizza;
use App\SubCategory;
use App\Category;
use URL;
class Pizzas extends Controller
{
  public function create(Request $request)
  {
      // $pizza=new Pizza();
      // // $pizza->sub_id=$request->subcat;
      // // $pizza->pizza_name=$request->pizza_name;
      // // $pizza->pizza_component=$request->pizza_component;
      // // $pizza->pizza_datiles=$request->input('Pizza_datiles');
      // // $pizza->larg=$request->larg;
      // // $pizza->medium=$request->medium;
      // // $pizza->small=$request->small;
      // // $file=$request->file('file');
      // // $img_name = $request->pizza_name.'.'.$file->getClientOriginalExtension();
      // // $file->move(public_path('img'),$img_name);
      // // $pizza->pizza_image = URL::to('/').'/img'.'/'.$img_name ;
      // // $pizza->save();
      Pizza::create($request->all());
      $subcate=SubCategory::all();
      $pizza=Pizza::all();
      return redirect('/pizza')->with(compact('subcate','pizza'));
      // view('admin.addpizza',compact('subcate','pizza'));
  }

  public function show()
  {
      $pizza=Pizza::all();
      $subcate=SubCategory::all();
      return view('admin.addpizza',compact('subcate','pizza'));
  }

  public function showpizza($id)
  {
    $pizza = Pizza::find($id);
    $subcate=SubCategory::all();
    return view('admin.updatepizza',compact('subcate','pizza'));
  }
  public function update(Request $request)
  {
    $subcat = SubCategory::find($request->subcat_id);
    $subcat_id=$subcat->id;
    $subcat->delete();
    return $subcat_id;
  }

  public function destroy(Request $request)
  {
    $pizza = Pizza::find($request->id);
    $pizza->delete();
    return 'true' ;
  }
}
