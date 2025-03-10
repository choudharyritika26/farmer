@extends('frontend.layout.app')

@section('style')
@endsection

@section('content')
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($slider as $slider)
            <div class="carousel-item active">
                <img src="{{ asset('storage/' . $slider->image) }}"  style="height: 500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="text-align:; color:white;"><b>{{ $slider->heading }}
                    
                    </b></h2>
                    <p>{!! html_entity_decode($slider ->description) !!}
                        
                    </p>
                </div>

            </div>
            @endforeach --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slider as $key => $sliders)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($slider as $key => $sliders)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $sliders->image) }}" class="d-block w-100 carousel-img" alt="...">
                </div>
            @endforeach
        </div>
    </div>
    {{-- <div class="carousel-item">
                <img src="{{ 'frontend/images/slider-5.jpg' }}"   style="height: 500px"  class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="text-align:left; color:white;"><b>NEW 22 DISC HARROW</b></h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ 'frontend/images/slider-6.jpg' }}"   style="height: 500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="text-align:left; background-color:rgb(109, 230, 191);"><b>NEW PRODUCT</b></h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div> --}}

    {{-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</button> --}}


    {{-- <div class="hero-wrap js-fullheight" style="background-image: url('{{ 'frontend/images/bg_1.jpg' }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h2 class="subheading">Welcome to Lawn care</h2>
                    <h1>Lawn care for everyone </h1>
                    <p class="mb-4">Let us work on your yard</p>
                    <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span
                                class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 py-5 order-md-last">
                    @foreach ($about as $aboutus)
                        <div class="heading-section ftco-animate">
                            {{-- <span class="subheading">About</span> --}}
                            <h2 class="mb-4">
                                {{ $aboutus->heading }}
                                {{-- About Sardar Agro Tanda --}}
                            </h2>
                            <p>
                                {{-- Sardar Agro Tanda is one of the leading Manufacturers and Exporters of High quality, Agricultural
                            Equipment. We manufacture extremely efficient and useful machines that are suitable for various
                            kinds of agricultural works. Our range includes Agricultural Cultivators, Disc Harrows, Potato
                            Planter, Seed Drill, Zero Tillage Seed Fertilizer Drill, Groundnut Digger, Ground Leveler,
                            Tractor Trolley of many sizes and. All of our machines are known for their efficiency and
                            durability.
                            We ensure the supreme quality of our machines by testing them. Our Agricultural Machines are
                            made from top-class quality components and are manufactured using sophisticated technology. Our
                            organization understands the needs of a farmer and his wish to cultivate a healthy crop.
                            Therefore, all of our machines are extremely easy to use and ensure superior performance --}}
                                {!! html_entity_decode($aboutus->description) !!}
                            </p>
                            {{-- <p><a href="#" class="btn btn-primary py-3 px-4">Get a Quote</a></p> --}}
                            <br>
                            <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="col-lg-9 services-wrap px-4 pt-5">
                    <div class="row pt-md-3">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-fence"></span>
                                </div>
                                <div class="text">
                                    <h3>Garden Care</h3>
                                    <p>Seeking justice in the world is a sed significant emotional and investment when
                                        we follow this call.</p>
                                </div>
                                <a href="#"
                                    class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-lawn-mower"></span>
                                </div>
                                <div class="text">
                                    <h3>Lawn mowing</h3>
                                    <p>Seeking justice in the world is a sed significant emotional and investment when
                                        we follow this call.</p>
                                </div>
                                <a href="#"
                                    class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-natural-resources"></span>
                                </div>
                                <div class="text">
                                    <h3>Lawn care</h3>
                                    <p>Seeking justice in the world is a sed significant emotional and investment when
                                        we follow this call.</p>
                                </div>
                                <a href="#"
                                    class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    {{-- <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 py-5 order-md-last">
                    <div class="heading-section ftco-animate">
                        <span class="subheading">Services</span>
                        <h2 class="mb-4">Lawn Services</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Get a Quote</a></p>
                    </div>
                </div>
                <div class="col-lg-9 services-wrap px-4 pt-5">
                    <div class="row pt-md-3">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-fence"></span>
                                </div>
                                <div class="text">
                                    <h3>Garden Care</h3>
                                    <p>Seeking justice in the world is a sed significant emotional and investment when
                                        we follow this call.</p>
                                </div>
                                <a href="#"
                                    class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-lawn-mower"></span>
                                </div>
                                <div class="text">
                                    <h3>Lawn mowing</h3>
                                    <p>Seeking justice in the world is a sed significant emotional and investment when
                                        we follow this call.</p>
                                </div>
                                <a href="#"
                                    class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-natural-resources"></span>
                                </div>
                                <div class="text">
                                    <h3>Lawn care</h3>
                                    <p>Seeking justice in the world is a sed significant emotional and investment when
                                        we follow this call.</p>
                                </div>
                                <a href="#"
                                    class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}






    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
                        style="background-image:url({{ 'frontend/images/about.jpg' }});">
                        <a href="https://vimeo.com/45830194"
                            class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="icon-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome to Lawn Care</span>
                            <h2 class="mb-4">Welcome to Lawn Care Company</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                            </p>
                            <div class="services-wrap">
                                <a href="#" class="services-list">Gutter cleaning
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">Organinc fertilization and weed control
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">Compost top dressing &amp; compost tea
                                    application
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">New lawn installation
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">Mulch and other services available
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-section" style="margin-top: -200px">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section ftco-animate">
                    <span class="subheading">Tips &amp; Techniques</span>
                    <h2 class="mb-4">Seasonal Lawn Care Tips</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-seasonal owl-carousel ftco-owl">
                        <div class="item">
                            <div class="wrap">
                                <div class="seasonal img d-flex align-items-center justify-content-center"
                                    style="background-image: url('{{ 'frontend/images/seasonal-1.jpg' }}');">
                                </div>
                                <div class="text text-center px-4">
                                    <h3><a href="#">Spring</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wrap">
                                <div class="seasonal img d-flex align-items-center justify-content-center"
                                    style="background-image: url({{ 'frontend/images/seasonal-2.jpg' }});">
                                </div>
                                <div class="text text-center px-4">
                                    <h3><a href="#">Summer</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wrap">
                                <div class="seasonal img d-flex align-items-center justify-content-center"
                                    style="background-image: url({{ 'frontend/images/seasonal-3.jpg' }});">
                                </div>
                                <div class="text text-center px-4">
                                    <h3><a href="#">Winter</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wrap">
                                <div class="seasonal img d-flex align-items-center justify-content-center"
                                    style="background-image: url({{ 'frontend/images/seasonal-4.jpg' }});">
                                </div>
                                <div class="text text-center px-4">
                                    <h3><a href="#">Fall</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- 
    <section class="ftco-intro bg-primary py-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <h2>Contact with us</h2>
                    <p>Do you have any comments or questions about the products then contact us.</p>
                </div>
                <div class="col-md-5 text-md-right">
                    <span class="contact-number">+00(123) 456-78-09</span>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ 'frontend/images/person_1.jp' }}g)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ 'frontend/images/person_2.jp' }}g)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ 'frontend/images/person_3.jp' }}g)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ 'frontend/images/person_1.jp' }}g)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url({{ 'frontend/images/person_2.jp' }}g)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section bg-light">
        <div class="container" >
            <div class="row justify-content-center mb-5 pb-3" style="margin-top: -200px">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    {{-- <span class="subheading">Our Blog</span> --}}
                    <h2>Video Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        {{-- <a href="blog-single.html" class="block-20"
                            style="background-image: url('{{ 'frontend/images/image_1.jpg' }}');">
                        </a> --}}
                        {{-- <iframe width="420" height="345" src="https://youtu.be/sLIH8zzhBmQ?si=Z_GJ9aXkH-8VDDF-">
                        </iframe> --}}
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/sLIH8zzhBmQ?si=FMV_roo98uQFsSSd" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                {{-- <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div> --}}
                                {{-- <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div> --}}
                            </div>
                            {{-- <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a>
                            </h3> --}}
                            <p>Hey there ! whatch my youtube vidieo</p>
                            {{-- <p><a href="#" class="btn btn-primary">Read more</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        {{-- <a href="blog-single.html" class="block-20"
                            style="background-image: url('{{ 'frontend/images/image_2.jpg' }}');">
                        </a> --}}
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/sLIH8zzhBmQ?si=k-d-t_JsUfgNvxO_" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                {{-- <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div> --}}
                                {{-- <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div> --}}
                            </div>
                            {{-- <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a>
                            </h3> --}}
                            <p>Hey there ! whatch my youtube vidieo</p>
                            {{-- <p><a href="#" class="btn btn-primary">Read more</a></p> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('{{ 'frontend/images/image_3.jpg' }}');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 py-4">
                    <div class="row">
                        <div class="col-md-6 ftco-animate d-flex align-items-center">
                            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
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
    </section> --}}
@endsection

@section('script')
@endsection
