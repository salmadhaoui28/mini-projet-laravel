@extends('Layout.app')
@section('content')
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <h1 class="mb-3 bread">Videos & Photos</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Videos & Photos <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="py-1 mb-5">
                <div class="container">
                    <div class="container mb-5">

                        <h3>Videos</h3>

                        <div class="row justify-content-center">

                            <div class="col-lg-4 mb-4">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                        src="https://www.youtube.com/embed/NmfHXlv7ngI" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen="" id="fitvid0"></iframe></div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                        src="https://www.youtube.com/embed/Dwk9pOh0-Jg" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen="" id="fitvid0"></iframe></div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                        src="https://www.youtube.com/embed/xHO0TyYbzFM" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen="" id="fitvid0"></iframe></div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                        src="https://www.youtube.com/embed/8_onPe3Vltg" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen="" id="fitvid0"></iframe></div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                        src="https://www.youtube.com/embed/WtqGpXLVJkk" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen="" id="fitvid0"></iframe></div>
                            </div>

                        </div>

                        <h3>Photos</h3>

                        <div id="photos" class="d-flex align-items-stretch row col-mb-50">

                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00001.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00001.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00002.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00002.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00003.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00003.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00004.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00004.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00005.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00005.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00008.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00008.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00009.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00009.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00011.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00011.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00012.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00012.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00013.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00013.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00014.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00014.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00016.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00016.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00028.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00028.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00006.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00006.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00007.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00007.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00010.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00010.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00018.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00018.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00024.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00024.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00019.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00019.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00020.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00020.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00021.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00021.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00022.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00022.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00023.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00023.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00015.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00015.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00025.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00025.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00026.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00026.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00027.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00027.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00017.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00017.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00029.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00029.png"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="overflow-hidden"><img data-enlargeable="" width="100%"
                                        style="cursor: zoom-in"
                                        onclick="manageClick(&quot;images/photo-gallery/jurse2023-photo-00030.png&quot;)"
                                        src="images/photo-gallery/jurse2023-photo-00030.png"></div>
                            </div>
                        </div>

                        <div id="loadMoreButton" class="text-center">
                            <a class="button button-3d button-large button-rounded button-purple mt-5"
                                onclick="handleLoadMore()">Load More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection