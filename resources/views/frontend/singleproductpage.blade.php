@extends('frontend.layout.app')

@section('style')
@endsection

@section('content')
    {{-- <section class="hero-wrap hero-wrap-2" style="background-image:url({{ 'frontend/images/bg_2.jpg' }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Product Single</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread" style="color:#4e9525 ">{{$our_product->heading}}</h1>   
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    {{-- <p>
                        <img src="{{ 'frontend/images/image_1.jpg' }}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3">It is a long established fact a reader be distracted</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit,
                        quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro
                        adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis,
                        enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta
                        architecto tempora.</p>
                    <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
                        doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo
                        eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis
                        ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
                    <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
                    <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
                        Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error
                        dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi
                        repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
                    <p>
                        <img src="{{ 'frontend/images/image_2.jpg' }}" alt="" class="img-fluid">
                    </p>
                    <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod,
                        est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab
                        consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit,
                        porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
                    <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem
                        pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo
                        soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni.
                        Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
                    <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique
                        asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates
                        beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum
                        provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!
                    </p>
                    <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo
                        a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis
                        alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta
                        doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis,
                        inventore?</p> --}}


                    {{-- <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <h1>Hello</h1>
                        </div>
                    </div> --}}
                     @foreach ($singleproducts as $singleproduct)
                    <div class="about-author d-flex p-4 ">
                        {{-- <div class="bio mr-5">
                            <img src="{{ asset('storage/' . $singleproduct->image) }}" alt="Image placeholder" class="img-fluid">
                        </div> --}}
                        <div class="bio mr-5">
                            @if($singleproduct->image)
                                <img src="{{ asset('storage/' . $singleproduct->image) }}" alt="Image placeholder" class="img-fluid" style="width: 800px">
                            @else
                                <!-- Optionally, you can display a placeholder or nothing if there's no image -->
                                {{-- <p>No image available</p> --}}
                            @endif
                        </div>
                        <div class="desc">
                            <h2>{{$singleproduct->heading}}</h2>
                            <p>{{$singleproduct->description ?? ''}}</p>
                        
                        </div>
                    </div>
                    @endforeach


                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->

@endsection

@section('script')
@endsection
