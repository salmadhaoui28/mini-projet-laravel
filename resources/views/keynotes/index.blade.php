@extends('Layout.app')
@section('content')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Keynotes</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Keynotes <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="py-1 mb-5">
        <div class="container mb-5">

<div class="text-center">
    <h3>Keynote Speakers</h3>
    <div class="row">
    @foreach($keynotes as $keynote)
        <div class="col-lg-3 py-5 px-4 mb-5">
            <img src="{{ $keynote->image }}" alt="" style="width: 100%;">
        </div>

        <div class="col-lg-3 text-start mb-5">
            <h4 class="blue-color">{{ $keynote->firstname }} {{ $keynote->lastname }}</h4>

            <p>
                {{ $keynote->description }}
            </p>

            website: <a class="text-decoration-underline" href="{{ $keynote->website }}" target="_blank">{{ $keynote->website }}</a>
        </div>
    @endforeach
</div>
</div>

</div>
    </section>
    @endsection