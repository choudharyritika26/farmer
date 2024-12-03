<footer class="ftco-footer ftco-bg-dark ftco-section mt-4 ">
    <div class="container mt-4 ">
        <div class="row mb-5 mt-4 ">
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Who We Are</h2>
                    {{-- <h5 class="logo"><a href="#"></a></h5> --}}
                    <p style="font-size: 13px">Sardar Agro Tanda is one of Leading the leading Manufacturers and
                        Exporters of High quality,
                        Agricultural Equipment. We manufacture extremely efficient and useful machines that are suitable
                        for various kinds of agricultural works.</p>
                    {{-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul> --}}
                </div>
            </div>
            {{-- <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block"><span
                                    class="ion-ios-arrow-forward mr-3"></span>Garden Care</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Lawn
                                mowing</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Lawn
                                Care</a></li>
                        <li><a href="#" class="py-1 d-block"><span
                                    class="ion-ios-arrow-forward mr-3"></span>Gutter Cleaning</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>New
                                Lawn Installation</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Our Address</h2>
                    <div class="block-23 mb-3">
                        @foreach ($contact_us_detales as $contact_us_detale)
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">
                                    <div style="line-height: 0.5;">
                                        <p style="font-size: 13px">
                                        {{-- Sardar Agro Industries
                                         Ploat No. 103-104
                                         Focal Point, GT Road Tanda
                                         Distt. Hoshiarpur (PB) India --}}
                                         {!! html_entity_decode($contact_us_detale->address) !!}
                                        </p>
                                    </div>
                                </span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">
                                        <p style="font-size: 14px; "> {{$contact_us_detale->phone_no}}</p>
                                    </span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">
                                        <p style="font-size: 14px"> {{$contact_us_detale->email_id}}</p>
                                    </span></a></li>
                        </ul>
                         @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Find Us on Map</h2>
                    <div class="opening-hours">
                        <iframe class="rounded-top w-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d434708.4195373455!2d75.642488!3d31.656855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a0f57be94d3%3A0xe5bd7ae1d71b775e!2sSardar%20Agro%20Industries!5e0!3m2!1sen!2sin!4v1732699794302!5m2!1sen!2sin" 
                            style="height: 200px; margin-bottom: -6px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i
                        class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
{{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div> --}}
