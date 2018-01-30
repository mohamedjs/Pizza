@extends('layouts.layout2')

@section('content')
<div class="product">
	<div id="productImages">
		<div id="sliderImages">
			<div class="productImage" style="background-image: url('{{$pizza->pizza_image}}')"></div>
			<div class="productImage" style="background-image: url('{{$pizza->pizza_image}}')"></div>
	</div>
			<div id="sliderIndex">

			</div>
	</div>

	<div class="productInfo">
		<h1 id="p_name" class="title">{{$pizza->pizza_name}}</h1>
		<span class="productId">Product component: {{$pizza->pizza_component}}</span>
		<div class="subProdInfo">
			<span class="price" id="pr">{{$pizza->small}}</span>
			<span class="stock">$</span>
		</div>
		<p>{{$pizza->pizza_datiles}}.</p>
		<input type="hidden" class="sss" name="pizid" value="{{$pizza->id}}">
		<label>Sizes: <a href="#">Size Food</a></label>
		<div class="select-wrapper">
				<select class="sel" name="size">
					<option value="sm">S</option>
					<option value="md">M</option>
					<option value="lg">L</option>
				</select>
		</div>

		<div class="addToCart">
			<div class="qntySection">
				<span class="btn" data-type="remove">-</span>
				<span id="qnty">1</span>
				<span class="btn" data-type="add">+</span>
			</div>

			<a class="ac" >Add To Cart</a>
		</div>

	</div>
</div>
@endsection
