<?php $x = '' ?>
<?php $y = '' ?>
<?php $z = '' ?>
<?php $t = 'active' ?>
@extends('layouts.app')

@section('content')

<!-- inner page banner -->
<div class="dlab-bnr-inr overlay-primary" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">A Propos</h1>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li>A Propos de Nous</li>
                </ul>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>
<!-- inner page banner END -->
<div class="content-block">
    <div class="section-full content-inner overlay-white-middle" style="background-image:url({{asset('images/background/bg1.png')}}), url({{asset('images/background/bg2.png')}}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
    <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Nos Services</h2>
                <h6 class="m-b10">Les services de qualités</h6>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="img-carousel owl-carousel owl-theme owl-none owl-dots-primary-big owl-btn-center-lr owl-loade m-b30">
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic1.jpg')}}" alt="" style="color:#76bc3d"/>
                            <i class="flaticon-woman-1"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Cosmetics</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic2.jpg')}}" alt=""/>
                            <i class="flaticon-lotus"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Hairdressing</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic3.jpg')}}" alt=""/>
                            <i class="flaticon-candle"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Body Treatments</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic4.jpg')}}" alt=""/>
                            <i class="flaticon-candle-1"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Massages</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic1.jpg')}}" alt=""/>
                            <i class="flaticon-woman-1"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Cosmetics</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic2.jpg')}}" alt=""/>
                            <i class="flaticon-lotus"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Hairdressing</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic3.jpg')}}" alt=""/>
                            <i class="flaticon-candle"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Body Treatments</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic4.jpg')}}" alt=""/>
                            <i class="flaticon-candle-1"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Massages</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic1.jpg')}}" alt=""/>
                            <i class="flaticon-woman-1"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Cosmetics</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic2.jpg')}}" alt=""/>
                            <i class="flaticon-lotus"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Hairdressing</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic3.jpg')}}" alt=""/>
                            <i class="flaticon-candle"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Body Treatments</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img width="300" height="300" src="{{asset('images/our-services/pic4.jpg')}}" alt=""/>
                            <i class="flaticon-candle-1"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Massages</a></h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="site-button outline">Voir les Services</a> 
            </div>
        </div>
    </div>
    <!-- Why Chose Us -->
    <!-- Our Pricing -->
    <div class="section-full content-inner bg-blue-light" style="background-image:url({{asset('images/background/bg5.jpg')}}); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Nos Prix</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Deep Tissue Massage</h4>
                            <p>60 – 100 Minute Session </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">$40.00</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Swedish Massage</h4>
                            <p>30 – 40 Minute Session  </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">$35.00</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Deep Tissue Massage</h4>
                            <p>60 – 100 Minute Session </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">$40.00</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Therapeutic Massage</h4>
                            <p>40 – 60 Minute Session</p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">$30.00</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Hot Stone Massage</h4>
                            <p>50 – 60 Minute Session </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">$34.00</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Couples Massage</h4>
                            <p>20 – 30 Minute Session  </p>
                        </div>
                        <div class="price-val  align-self-center">
                            <h3 class="text-secondry">$42.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Pricing -->
    <!-- Our Professional Team -->
    <div class="section-full content-inner-2 overlay-white-middle" style="background-image:url({{asset('images/background/bg1.png')}}), url({{asset('images/background/bg2.png')}}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Notre Equipe de Professionnelle
                </h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img width="300" height="300" src="{{asset('images/our-team/pic1.jpg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
                            <span class="clearfix">Cosmetologist</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img width="300" height="300" src="{{asset('images/our-team/pic2.jpg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
                            <span class="clearfix">Cosmetologist</span>
                        </div>
                    </div>
                </div>	
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img width="300" height="300" src="{{asset('images/our-team/pic3.jpg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
                            <span class="clearfix">Cosmetologist</span>
                        </div>
                    </div>
                </div>	
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img width="300" height="300" src="{{asset('images/our-team/pic5.jpg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
                            <span class="clearfix">Cosmetologist</span>
                        </div>
                    </div>
                </div>	
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img width="300" height="300" src="{{asset('images/our-team/pic4.jpg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
                            <span class="clearfix">Cosmetologist</span>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
    <!-- Our Professional Team End -->
    <!-- Our Portfolio -->
    <div class="section-full content-inner-2" style="background-image:url({{asset('images/background/bg4.jpg')}}); background-position: bottom; background-size:cover;">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Témoignages des Clients</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Les clients ayant reçu nos services et qui par la suite ont eut des bon retour d'expériences .</p>
            </div>
            <div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic2.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic3.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic2.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic3.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic2.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic3.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area END -->

@endsection