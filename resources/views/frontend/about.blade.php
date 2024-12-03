@extends('frontend.layout.app')

@section('style')
@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ 'frontend/images/bg_2.jpg' }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">About Us</h1>
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container mt-4">
            @foreach ($about as $aboutus)
            <div class="row d-flex mt-4">
                <div class="col-md-6 d-flex mt-4">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
                        style="background-image:url({{ asset('storage/' . $aboutus->image) }});height:auto;">
                        {{-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a> --}}
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            {{-- <span class="subheading">Welcome to Farmer Care</span> --}}
                            <h2 class="mb-4"> 
                                {{ $aboutus->heading }}
                                {{-- About Sardar Agro Tanda --}}
                            </h2>
                            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
                            <div class="services-wrap">
                                <p>
                                    {{-- About Sardar Agro Industries
                                    is one of Leading the leading Manufacturers and Exporters of High quality, Agricultural
                                    Equipment. We manufacture extremely efficient and useful machines that are suitable for
                                    various kinds of agricultural works. Our range includes Agricultural Cultivators, Disc
                                    Harrows, Potato Planter, Seed Drill, Zero Tillage Seed Fertilizer Drill, Groundnut
                                    Digger, Ground Leveler, Tractor Trolley of many sizes and. All of our machines are known
                                    for their efficiency and durability.
                                    We ensure the supreme quality of our machines by testing them. Our Agricultural Machines
                                    are made from top-class quality components and are manufactured using sophisticated
                                    technology. Our organization understands the needs of a farmer and his wish to cultivate
                                    a healthy crop. Therefore, all of our machines are extremely easy to use and ensure
                                    superior performance --}}
                                    {!! html_entity_decode($aboutus->description) !!}
                                </p>
                                {{-- <p><a href="#" class="btn btn-primary py-3 px-4">Get a Quote</a></p> --}}
                                </p>
                                {{-- <a href="#" class="services-list">Gutter cleaning
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">Organinc fertilization and weed control
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">Compost top dressing &amp; compost tea application
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
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- <section class="ftco-intro bg-primary py-5">
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
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
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
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
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
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
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
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
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
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
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
    </section>
 --}}

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
