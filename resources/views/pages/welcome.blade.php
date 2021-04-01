<?php $x = 'active' ?>
<?php $y = '' ?>
<?php $z = '' ?>
<?php $t = '' ?>
@extends('layouts.app')

@section('content')

    <!-- Main Slider -->
    <div class="section-full content-inner overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Youyou Beauty</h2>
                <h6 class="m-b10">Notre soucis est de vous satisfaire</h6>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
            </div>
            <div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1 owl-loaded owl-drag">
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Professionnalisme</a></h5>
                            <p class="m-b15">Une approche professionnelle vous est reservé quand vous demandez nos services</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Soin Cosmetique de luxe</a></h5>
                            <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Education Medicale</a></h5>
                            <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider -->
    <!-- About Us -->
    <div class="section-full bg-white content-inner-2 overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
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
                            <img width="300" height="300" src="images/our-services/pic1.jpg" alt="" style="color:#76bc3d"/>
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
                            <img width="300" height="300" src="images/our-services/pic2.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic3.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic4.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic1.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic2.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic3.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic4.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic1.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic2.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic3.jpg" alt=""/>
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
                            <img width="300" height="300" src="images/our-services/pic4.jpg" alt=""/>
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
    <!-- About Us End -->
    <!-- Our Services -->
    <div class="section-full content-inner-3 services-box bg-pink-light" style="background-image:url(images/background/bg5.jpg); background-position: bottom; background-size: 100%; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
                        <div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-woman"></i></span> </div>
                        <div class="icon-content">
                            <h6 class="dlab-tilte">Nous somme professionnel</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="site-button-secondry">Site Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
                        <div class="icon-lg m-b10"><span class="icon-cell text-primary"><i class="flaticon-mortar"></i></span> </div>
                        <div class="icon-content">
                            <h6 class="dlab-tilte">Cosmetiques</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="site-button-secondry">Site Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
                        <div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-candle"></i></span> </div>
                        <div class="icon-content">
                            <h6 class="dlab-tilte">Education Medicale</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="site-button-secondry">Site Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b10">
                    <div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
                        <div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-sauna-1"></i></span> </div>
                        <div class="icon-content">
                            <h6 class="dlab-tilte">Equipments</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="site-button-secondry">Site Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services -->
    <!-- Why Chose Us -->
    <div class="section-full content-inner-2 our-portfolio" style="background-image:url(images/background/bg6.jpg); background-size: cover;">
        <div class="container">
            <div class="section-head text-black text-center m-b20">
                <h2 class="text-primary m-b10">Notre Portfolio</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="site-filters style1 clearfix center">
                        <ul class="filters" data-toggle="buttons">
                            <li data-filter="" class="btn active"><input type="radio"><a href="#"><span>Tout</span></a></li>
                            <li data-filter="image-1" class="btn"><input type="radio"><a href="#"><span>Coiffure</span></a></li>
                            <li data-filter="image-2" class="btn"><input type="radio"><a href="#"><span>Makeup</span></a></li>
                            <li data-filter="image-3" class="btn"><input type="radio"><a href="#"><span>Onglerie</span></a></li>
                            <li data-filter="image-4" class="btn"><input type="radio"><a href="#"><span>Esthétiques</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <ul id="masonry" class="portfolio-box dlab-gallery-listing gallery-grid-4 gallery row lightgallery">
                    <li class="image-1 image-4 card-container col-lg-3 col-md-3 col-sm-3">
                        <div class="dlab-box">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                            <img width="385" height="385" src="images/gallery/middle/image-1.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <span data-exthumbimage="images/gallery/middle/thumb/pic1.jpg" data-src="images/gallery/image-1.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">		
                                            <i class="ti-fullscreen"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dlab-box p-tb30 image-2">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                            <img width="385" height="385" src="images/gallery/middle/image-2.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <span data-exthumbimage="images/gallery/middle/thumb/pic2.jpg" data-src="images/gallery/image-2.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">		
                                            <i class="ti-fullscreen"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="image-2 card-container col-lg-6 col-md-6 col-sm-6">
                        <div class="dlab-box m-b30">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                            <img src="images/gallery/image-3.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <span data-exthumbimage="images/gallery/middle/thumb/pic3.jpg" data-src="images/gallery/image-3.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">		
                                            <i class="ti-fullscreen"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="image-3 image-4 card-container col-lg-3 col-md-3 col-sm-3">
                        <div class="dlab-box m-b30">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                            <img width="385" height="385" src="images/gallery/middle/image-4.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <span data-exthumbimage="images/gallery/middle/thumb/pic4.jpg" data-src="images/gallery/image-4.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">		
                                            <i class="ti-fullscreen"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dlab-box">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                            <img width="385" height="385" src="images/gallery/middle/image-5.jpg" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <span data-exthumbimage="images/gallery/middle/thumb/pic5.jpg" data-src="images/gallery/image-5.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">		
                                            <i class="ti-fullscreen"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Why Chose Us End -->
    <!-- Our Portfolio -->
    <div class="section-full video-presentation overlay-black-dark bg-img-fix"  style="background-image:url(images/background/bg1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-white text-center">
                    <h2>Video de Presentation </h2>
                    <p class="max-w700 m-auto">In this video, our staff members tell about their work at Solari, how they achieve the best results for their clients every day and more. Click the Play button below to watch this presentation.</p>
                    <div class="video-play-icon m-t50">
                        <a href="https://www.youtube.com/watch?v=rICXf0UH7Cg" class="popup-youtube video"><i class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Portfolio END -->
    <!-- Our Professional Team -->
    <div class="section-full content-inner-2 overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
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
                        <div class="dlab-media"> <img src="{{asset('images/our-team/coiffeuse 1.jpeg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">Coiffeuse</a></h5>
                            <span class="clearfix">Coiffeuse</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img src="{{asset('images/our-team/coiffeuse2.jpeg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">Coiffeuse</a></h5>
                            <span class="clearfix">Coiffeuse</span>
                        </div>
                    </div>
                </div>	
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img src="{{asset('images/our-team/esth1.jpeg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">Esthéticienne</a></h5>
                            <span class="clearfix">Esthéticienne</span>
                        </div>
                    </div>
                </div>	
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img src="{{asset('images/our-team/makeuper1.jpeg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">Makeuper</a></h5>
                            <span class="clearfix">Makeuper</span>
                        </div>
                    </div>
                </div>	
                <div class="item">
                    <div class="dlab-box text-center team-box">
                        <div class="dlab-media"> <img src="{{asset('images/our-team/makeuper2.jpeg')}}" alt=""></div>
                        <div class="dlab-title-bx p-a10">
                            <h5 class="text-black m-a0"><a href="#">Makeuper</a></h5>
                            <span class="clearfix">Makeuper</span>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
    <!-- Our Professional Team End -->
    <!-- Our Portfolio -->
    <div class="section-full content-inner-2" style="background-image:url(images/background/bg4.jpg); background-position: bottom; background-size:cover;">
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
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Portfolio END -->  
    <!-- contact area END -->
@endsection