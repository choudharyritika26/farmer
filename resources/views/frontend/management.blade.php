@extends('frontend.layout.app')

@section('style')
@endsection

@section('content')
    <section class="mt-4 testimony-section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    {{-- <span class="subheading">Testimonial</span> --}}
                    <h2 class="mb-4">{{$manage->heading}}</h2>    
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    {{-- <div class="carousel-testimony owl-carousel ftco-owl"> --}}
                    <div class="item">
                        @foreach ($management as $management)
                        <div class="testimony-wrap py-4 " >
                            <div class="text">
                                {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p> --}}
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('storage/' . $management->image) }})">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name"> {{ $management->heading }}</p>
                                        {{-- <span class="position">Founder</span> --}}
                                    </div>
                                </div>
                                <p class="mb-4">
                                    {{-- Sardar Agro Tanda founded by S. Ravinder Singh Thiara a qualified Engineer
                                    25 year ago. Company started with 5 employees at the beginning. At present there are
                                    more than 35 workers are working. --}}
                                    {{$management->description ?? ''}}
                                </p>
                            </div>
                        </div>

                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
