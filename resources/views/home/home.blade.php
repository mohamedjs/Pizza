@extends('layouts.layout')

@section('content')
<div style="margin-left: auto;margin-right: auto;width: 960px;">
  <div class="grid_12">
    <div class="car_wrap">
      <h2>Best Choice</h2>
      <a href="#" class="prev"></a>
      <a href="#" class="next"></a>
      <ul class="carousel1">
        @foreach($pizza->slice(0,7) as $piz)
        <li>
          <div><a href="../pizz/{{$piz->id}}"><img src="{{$piz->pizza_image}}" alt="" style="width:219px;height:141px">
            <div class="col1 upp">{{$piz->pizza_name}}</div></a>
            <span> {{$piz->pizza_datiles}}</span>
            <div class="price">{{$piz->small}}$</div>
          </div>
        </li>
        @endforeach
        <li>
          <div><img src="../images/page1_img3.jpg" alt="">
            <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
            <span> Dorem ipsum dolor amet consectetur</span>
            <div class="price">45$</div>
          </div>
        </li>
        <li>
          <div><img src="../images/page1_img4.jpg" alt="">
            <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
            <span> Dorem ipsum dolor amet consectetur</span>
            <div class="price">45$</div>
          </div>
        </li>
        <li>
          <div><img src="../images/page1_img3.jpg" alt="">
            <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
            <span> Dorem ipsum dolor amet consectetur</span>
            <div class="price">45$</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div id="fh5co-type" style="background-image: url(../images/page1_img3.jpg);background-size:cover;background-attachment:fixed;" data-stellar-background-ratio="0.5">
  <div class="fh5co-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 to-animate">
        <div class="fh5co-type">
          <h3 class="with-icon icon-1">Fruits</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-md-3 to-animate">
        <div class="fh5co-type">
          <h3 class="with-icon icon-2">Sea food</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-md-3 to-animate">
        <div class="fh5co-type">
          <h3 class="with-icon icon-3">Vegetables</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-md-3 to-animate">
        <div class="fh5co-type">
          <h3 class="with-icon icon-4">Meat</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="fh5co-contact" data-section="reservation">
  <div class="container">
    <div class="row text-center fh5co-heading row-padded">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="heading to-animate">Reserve a Table</h2>
        <p class="sub-heading to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 to-animate-2">
        <h3>Contact Info</h3>
        <ul class="fh5co-contact-info">
          <li class="fh5co-contact-address ">
            <i class="icon-home"></i>
            5555 Love Paradise 56 New Clity 5655, <br>Excel Tower United Kingdom
          </li>
          <li><i class="icon-phone"></i> (123) 465-6789</li>
          <li><i class="icon-envelope"></i>info@freehtml5.co</li>
          <li><i class="icon-globe"></i> <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></li>
        </ul>
      </div>
      <div class="col-md-6 to-animate-2">
        <h3>Reservation Form</h3>
        <div class="form-group ">
          <label for="name" class="sr-only">Name</label>
          <input id="name" class="form-control" placeholder="Name" type="text">
        </div>
        <div class="form-group ">
          <label for="email" class="sr-only">Email</label>
          <input id="email" class="form-control" placeholder="Email" type="email">
        </div>
        <div class="form-group">
          <label for="occation" class="sr-only">Occation</label>
          <select class="form-control" id="occation">
            <option>Select an Occation</option>
            <option>Wedding Ceremony</option>
            <option>Birthday</option>
            <option>Others</option>
          </select>
        </div>
        <div class="form-group ">
          <label for="date" class="sr-only">Date</label>
          <input id="date" class="form-control" placeholder="Date &amp; Time" type="text">
        </div>



        <div class="form-group ">
          <label for="message" class="sr-only">Message</label>
          <textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group ">
          <input class="btn btn-primary" value="Send Message" type="submit">
        </div>
        </div>
    </div>
  </div>
</div>
@endsection
