@extends('frontend.layout.app')

@section('styles')
<style>
    /* .bgImage{
        opacity: 0.8;
    } */
</style>
@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ 'frontend/images/crop1.jpg' }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Our Product</h1>
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                                class="ion-ios-arrow-forward"></i></span></p> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                @foreach ($product as $product)
                <div class="col-md-4 d-flex ftco-animatee">
                  
                    <div class="blog-entry justify-content-end bgImage">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ asset('storage/' . $product->image) }});">
                        </a>
                        <div class="text p-4 float-right d-block">
                            {{-- <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div> --}}
                            <h3 class="heading mb-0"><a href="#">  {{ $product->heading }}</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                  
                </div>
                {{-- <div class="col-md-4 d-flex ftco-animatee">
                    <div class="blog-entry justify-content-end bgImage">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ 'frontend/images/image_2.jpg' }});">
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
                            <h3 class="heading mb-0"><a href="#">All you want to know product industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animatee">
                    <div class="blog-entry justify-content-end bgImage">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ 'frontend/images/image_3.jpg' }});">
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
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animatee">
                    <div class="blog-entry justify-content-end bgImage">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ 'frontend/images/image_4.jpg' }});">
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
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animatee">
                    <div class="blog-entry justify-content-end bgImage">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ 'frontend/images/image_5.jpg' }});">
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
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animatee">
                    <div class="blog-entry justify-content-end bgImage">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url({{ 'frontend/images/image_6.jpg' }});">
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
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
            
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
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
    </section>
@endsection

@section('script')
@endsection
