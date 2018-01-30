@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-lg-10">
    <form class="addpiz" method="post" action="/addpizza" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
          <label for="disabledSelect">SubCategory</label>
          <select id="disabledSelect" class="form-control" name="sub_id">
            @foreach($subcate as $subcategory)
              <option value="{{$subcategory->id}}" id="sub{{$subcategory->id}}">{{$subcategory->sub_name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label>Pizza_name</label>
        <input name="pizza_name" class="form-control" placeholder="Enter Pizza Name">
      </div>
      <div class="form-group">
        <label>Pizza_component</label>
        <input name="pizza_component" class="form-control" placeholder="Enter Pizza Component ">
      </div>
      <div class="form-group">
        <label>Pizza_datiles</label>
        <textarea name="pizza_datiles" class="form-control" rows="3" placeholder="Enter Pizza datiles..."></textarea>
      </div>
      <div class="col-md-4 form-group">
        <label>Larg_Salary</label>
        <input name="larg" class="form-control" placeholder="Enter Pizza Larg Salary ">
      </div>
      <div class="col-md-4 form-group">
        <label>Medium_Salary</label>
        <input name="medium" class="form-control" placeholder="Enter Pizza Medium Salary ">
      </div>
      <div class="col-md-4 form-group">
        <label>Small_Salary</label>
        <input name="small" class="form-control" placeholder="Enter Pizza Small Salary ">
      </div>
      <div class="form-group">
        <label>Pizza_image</label>
        <input type="file" name="pizza_image" class="form-control" placeholder="Enter Pizza image ">
      </div>
      <button type="submit" class="btn btn-primary" style="width:100px;">Add</button>
    </form>
  </div>
</div>
<br><br><br>
<div class="row">
  <div class="col-md-12">
    <!--    Hover Rows  -->
   <div class="panel panel-default">
     <div class="panel-heading">
         pizza_table
     </div>
     <div class="panel-body">
       <div class="table-responsive">
           <table class="table table-hover" id="pizza_table">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Pizza Name</th>
                 <th>Pizza component</th>
                 <th>Pizza datiles</th>
                 <th>Larg Price</th>
                 <th>Medium Price</th>
                 <th>Small Price</th>
                 <th>Pizza img</th>
                 <th>Category</th>
                 <th>Update</th>
                 <th>Delet</th>
               </tr>
             </thead>
             <tbody>
               @foreach($pizza as $piz)
               <tr id='pizza{{$piz->id}}'>
                 <td>{{$piz->id}}</td>
                 <td>{{$piz->pizza_name}}</td>
                 <td>{{$piz->pizza_component}}</td>
                 <td>{{$piz->pizza_datiles}}</td>
                 <td>{{$piz->larg}}</td>
                 <td>{{$piz->medium}}</td>
                 <td>{{$piz->small}}</td>
                 <td><img src="{{$piz->pizza_image}}" alt="" style="width:70px;height:70px;"></td>
                 <td id="sub{{$piz->subcategory->id}}">{{$piz->subcategory->sub_name}}</td>
                 <td><a href="../update/{{$piz->id}}"><button type="submit" class="btn btn-primary" id="piza{{$piz->id}}" >Update</button></a></td>
                 <td><button type="submit" class="btn btn-primary" id="piza{{$piz->id}}" onclick="deletepizza({{$piz->id}})">Delet</button></td>
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
