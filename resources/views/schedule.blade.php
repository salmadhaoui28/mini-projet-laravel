@extends('Layout.app')
@section('content')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Conference Schedule</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Schedule <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
		<section class="ftco-section">
			<div class="container">
        <div class="ftco-schedule">
					<div class="row">
            <div class="col-md-3 nav-link-wrap text-center text-md-right">
	            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">First Day <span>21 July 2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Second Day <span>22 July 2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Third Day <span>23 July 2019</span></a>

	            </div>
	          </div>
	          <div class="col-md-9 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              </div>
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Introduction to Business Leaders</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<span class="time">09:00 am - 4:30 pm</span>
	              			<p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
			</div>
		</section>
		
		
		<section class="ftco-section-parallax ftco-section ftco-no-pt">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-7 text-center heading-section ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection
