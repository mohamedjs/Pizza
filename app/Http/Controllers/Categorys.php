<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
class Categorys extends Controller
{

    public function create(Request $request)
    {
        $cat=new Category();
        $cat->category_name=$request->cateory;
        $cat->save();
        $data= json_encode($cat);
        return response()->json($data);
    }



    public function show()
    {
        $cate=Category::all();
        return view('admin.addcategory',compact('cate'));
    }


    public function update(Request $request)
    {
      $cat = Category::find($request->cat_id);
      $cat_id=$cat->id;
      $cat->delete();
      return $cat_id;
    }

    public function destroy(Request $request)
    {
      $cat = Category::find($request->id);
      $cat->delete();
      return 'true' ;
    }
}
