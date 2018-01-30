@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-lg-10">
    <form class="addsubca" method="post" action="/admin">
      {!! csrf_field() !!}
      <div class="form-group">
          <label for="disabledSelect">Category</label>
          <select id="disabledSelect" class="form-control" name="subca">
            @foreach($cate as $category)
              <option value="{{$category->id}}" id="s{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label>SubCategory_name</label>
        <input name="subcategory" class="form-control" placeholder="Enter Sub Category Name" id="subcategory">
      </div>
      <button type="submit" class="btn btn-primary" style="width:100px;" id="addsubca">Add</button>
    </form>
  </div>
</div>
<br><br><br>
<div class="row">
  <div class="col-md-12">
    <!--    Hover Rows  -->
   <div class="panel panel-default">
     <div class="panel-heading">
         SubCategory_table
     </div>
     <div class="panel-body">
       <div class="table-responsive">
           <table class="table table-hover" id="subcat_table">
             <thead>
               <tr>
                 <th>#</th>
                 <th>category_name</th>
                 <th>subcategory_name</th>
                 <th>Update</th>
                 <th>Delet</th>
               </tr>
             </thead>
             <tbody>
               @foreach($subcate as $subcategory)
               <tr id='subcate{{$subcategory->id}}'>
                 <td>{{$subcategory->id}}</td>
                 <td id="{{$subcategory->category->id}}">{{$subcategory->category->category_name}}</td>
                 <td id="subcategory{{$subcategory->id}}">{{$subcategory->sub_name}}</td>
                 <td><button type="submit" class="btn btn-primary" id="subcat{{$subcategory->id}}" onclick="updatesubcat({{$subcategory->id}})">Update</button></td>
                 <td><button type="submit" class="btn btn-primary" id="subcat{{$subcategory->id}}" onclick="deletesubcat({{$subcategory->id}})">Delet</button></td>
               </tr>
               @endforeach
             </tbody>
           </table>
       </div>
     </div>
   </div>
   <!-- End  Hover Rows  -->
 </div>
</div>
@endsection
