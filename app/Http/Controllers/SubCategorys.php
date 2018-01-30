<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;
class SubCategorys extends Controller
{
  public function create(Request $request)
  {
      $subcat=new SubCategory();
      $subcat->category_id=$request->subca;
      $subcat->sub_name=$request->subcategory;
      $subcat->save();
      $data= json_encode($subcat);
      return response()->json($data);
  }

  public function show()
  {
      $subcate=SubCategory::all();
      $cate=Category::all();
      return view('admin.addsubca',compact('subcate','cate'));
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
    $subcat = SubCategory::find($request->id);
    $subcat->delete();
    return 'true' ;
  }
}
