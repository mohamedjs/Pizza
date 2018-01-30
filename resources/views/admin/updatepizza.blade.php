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
        <input name="pizza_name" class="form-control" placeholder="Enter Pizza Name" value="{{$pizza->pizza_name}}">
      </div>
      <div class="form-group">
        <label>Pizza_component</label>
        <input name="pizza_component" class="form-control" placeholder="Enter Pizza Component " value="{{$pizza->pizza_component}}">
      </div>
      <div class="form-group">
        <label>Pizza_datiles</label>
        <textarea name="pizza_datiles" class="form-control" rows="3" placeholder="Enter Pizza datiles..." value="">{{$pizza->pizza_datiles}}</textarea>
      </div>
      <div class="col-md-4 form-group">
        <label>Larg_Salary</label>
        <input name="larg" class="form-control" placeholder="Enter Pizza Larg Salary " value="{{$pizza->larg}}">
      </div>
      <div class="col-md-4 form-group">
        <label>Medium_Salary</label>
        <input name="medium" class="form-control" placeholder="Enter Pizza Medium Salary " value="{{$pizza->medium}}">
      </div>
      <div class="col-md-4 form-group">
        <label>Small_Salary</label>
        <input name="small" class="form-control" placeholder="Enter Pizza Small Salary " value="{{$pizza->small}}">
      </div>

      <div class="form-group">
        <img id="blah" src="{{$pizza->pizza_image}}" alt="your image" style="width:70px;height:70px;" />
        <label>Pizza_image</label>
        <input type="file" name="pizza_image" class="form-control" placeholder="Enter Pizza image " onchange="readURL(this);">
      </div>
      <button type="submit" class="btn btn-primary" style="width:100px;">Add</button>
    </form>
  </div>
</div>
@endsection
