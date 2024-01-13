@extends('Layout.app')
@section('content')
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <h1 class="mb-3 bread">Sponsors</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Sponsors <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="py-1">
                <div class="container mb-5">

                    The following organizations are supporting us:

                    <div class="justify-content-center">
                        If your organization/society/company is interested to support the JURSE 2025 event, please
                        contact us at <a class="text-decoration-underline"
                            href="mailto:dhaouisalma110@gmail.com">************</a>
                        <div class="row">
                            @foreach($sponsors as $sponsor)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <img src="{{ asset('images/' . $sponsor->src) }}" alt="{{ $sponsor->alt }}"
                                    class="img-fluid">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection