@extends('frontend.layout.app')

@section('style')
@endsection

@section('content')
    <section class="mt-4 testimony-section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    {{-- <span class="subheading">Testimonial</span> --}}
                    <h2 class="mb-4">Management</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    {{-- <div class="carousel-testimony owl-carousel ftco-owl"> --}}
                    <div class="item">
                        <div class="testimony-wrap py-4 " style="background-color: rgb(197, 248, 201)">
                            <div class="text">
                                {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p> --}}
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ 'frontend/images/person_1.jp' }}g)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name"> S. Ravinder Singh</p>
                                        <span class="position">Founder</span>
                                    </div>
                                </div>
                                <p class="mb-4">Sardar Agro Tanda founded by S. Ravinder Singh Thiara a qualified Engineer
                                    25 year ago. Company started with 5 employees at the beginning. At present there are
                                    more than 35 workers are working.</p>
                            </div>
                        </div>

                        <div class="testimony-wrap py-4 mt-4 " style="background-color: rgb(197, 248, 201)">
                            <div class="text">
                                {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p> --}}
                                <div class="d-flex align-items-center">
                                    {{-- <div class="user-img"
                                            style="background-image: url({{ 'frontend/images/person_1.jp' }}g)">
                                        </div> --}}
                                    <div class="pl-3">
                                        <p class="name">Message From Director</p>
                                        {{-- <span class="position">Message From Director</span> --}}
                                    </div>
                                </div>
                                <p class="mb-4">One of our company’s strongest personality traits is commitment. We are
                                    committed to our clients, our team members, our industry and to each other. Commitment
                                    is a trait that all the best teams and their members must possess.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
