@extends('layouts.admin')

@section('content')
    <div class="row">
      <div class="col-lg-10">
        <form class="addca" method="post" action="/admin">
          {!! csrf_field() !!}
          <div class="form-group">
            <label>Category_name</label>
            <input name="cateory" class="form-control" placeholder="Enter Category Name" id="cateory">
          </div>
          <button type="submit" class="btn btn-primary" style="width:100px;" id="addca">Add</button>
        </form>
      </div>
    </div>
    <br><br><br>
    <div class="row">
      <div class="col-md-12">
        <!--    Hover Rows  -->
       <div class="panel panel-default">
         <div class="panel-heading">
             Category_table
         </div>
         <div class="panel-body">
           <div class="table-responsive">
               <table class="table table-hover" id="cat_table">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>category_name</th>
                     <th>Update</th>
                     <th>Delet</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($cate as $category)
                   <tr id='cate{{$category->id}}'>
                     <!-- @foreach($category->subs as $sub)
                     <td>{{$sub->sub_name}}</td>
                     @endforeach -->
                     <td>{{ $category->id}}</td>
                     <td id="category{{$category->id}}">{{ $category->category_name}}</td>
                     <td><button type="submit" class="btn btn-primary" id="cat{{$category->id}}" onclick="updatecat({{$category->id}})">Update</button></td>
                     <td><button type="submit" class="btn btn-primary" id="cat{{$category->id}}" onclick="deletecat({{$category->id}})">Delet</button></td>
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
