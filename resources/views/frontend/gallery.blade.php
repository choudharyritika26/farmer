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
                    <h1 class="mb-3 bread">Our Gallery</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb mt-5">
        <div class="container-fluid px-md-0 mt-4">
            <div class="row no-gutters mt-4">
            @foreach ($gallery as $gallery)

                <div class="col-md-4 p-2   ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ asset('storage/' . $gallery ->image) }});">
                        <a href="{{ asset('storage/' . $gallery ->image) }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                               <h3> <span>
                                {{ $gallery ->heading }}
                                {{-- Nature --}}
                            </span></h3>
                                <h2><a href="work-single.html">
                                    {!! html_entity_decode($gallery ->description) !!}
                                    {{-- Beautiful Work --}}
                                </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery2.jpg' }});">
                        <a href="{{ 'frontend/images/gallery2.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery3.jpg' }});">
                        <a href="{{ 'frontend/images/gallery3.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4  p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery-4.jpg' }});">
                        <a href="{{ 'frontend/images/gallery-4.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery-5.jpg' }});">
                        <a href="{{ 'frontend/images/gallery-5.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery-6.jpg' }});">
                        <a href="{{ 'frontend/images/gallery-6.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4  p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery-7.jpg' }});">
                        <a href="{{ 'frontend/images/gallery-7.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery-8.jpg' }});">
                        <a href="{{ 'frontend/images/gallery-8.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  p-2 ftco-animate">
                    <div class="gallery img d-flex align-items-end"
                        style="background-image: url({{ 'frontend/images/gallery-9.jpg' }});">
                        <a href="{{ 'frontend/images/gallery-9.jpg' }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Nature</span>
                                <h2><a href="work-single.html">Beautiful Work</a></h2>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary mt-4">
        <div class="container mt-4">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-lg-8 py-4">
                    <div class="row">
                        <div class="col-md-6  p-2 ftco-animate d-flex align-items-center">
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
    </section>
@endsection

@section('script')
@endsection
