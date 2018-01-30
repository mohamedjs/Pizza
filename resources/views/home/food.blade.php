@extends('layouts.layout2')

@section('content')
<!-- menu section -->
<div id="fh5co-menus" data-section="menu">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">{{$sub->sub_name}}</h2>
				<p class="sub-heading to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row row-padded">
			@foreach ($pizza as $piz)
			<div class="col-md-6">
				<div class="fh5co-food-desc">
					<figure>
						<a href="../../pizz/{{$piz->id}}"><img src="{{$piz->pizza_image}}" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co"></a>
					</figure>
					<div>
						<a href="../../pizz/{{$piz->id}}"><h3>{{$piz->pizza_name}}</h3></a>
						<p>{{$piz->pizza_component}}.</p>
					</div>
				</div>
				<div class="fh5co-food-pricing">
					small
						{{$piz->small}}$
				</div>
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
				<p><a href="#" class="btn btn-primary btn-outline">More Food Menu</a></p>
			</div>
		</div>
	</div>
</div>
@endsection
