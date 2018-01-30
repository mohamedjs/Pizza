@extends('layouts.admin')

@section('content')
    <div class="row">
      <div class="col-md-12">
        <!--    Hover Rows  -->
       <div class="panel panel-default">
         <div class="panel-heading">
             Car_table
         </div>
         <div class="panel-body">
           <div class="table-responsive">
               <table class="table table-hover" id="cat_table">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>user_name</th>
                     <th>user city</th>
                     <th>user address</th>
                     <th>pizza_name</th>
                     <th>price</th>
                     <th>delet</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($all as $al)
                   <tr id='cate{{$al->id}}'>
                     <td>{{$al->id}}</td>
                     <td>{{ $al->name}}</td>
                     <td>{{$al->city}}</td>
                     <td>{{$al->address}}</td>
                     <td id="category{{$al->id}}">{{ $al->pizza_name}}</td>
                     <td>{{$al->price}}</td>
                     <td><button type="submit" class="btn btn-primary" id="cat{{$al->id}}" onclick="deletecat({{$al->id}})">Delet</button></td>
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
