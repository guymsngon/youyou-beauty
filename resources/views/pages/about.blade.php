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
                <h2 class="text-primary m-b10">Our Services</h2>
                <h6 class="m-b10">You Will Like To Look Like Goddes Every Day!</h6>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1 owl-loaded owl-drag">
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="{{asset('images/blog/grid/pic1.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">We are Professional</a></h5>
                            <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="{{asset('images/blog/grid/pic2.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Lux Cosmetic</a></h5>
                            <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="{{asset('images/blog/grid/pic3.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Medical Education</a></h5>
                            <p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Chose Us -->
    <!-- Our Pricing -->
    <div class="section-full content-inner bg-blue-light" style="background-image:url({{asset('images/background/bg5.jpg')}}); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Our Pricing</h2>
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
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Facial</h4>
                            <p>15 – 30 Minute Session </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">$38.00</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Body Waxing</h4>
                            <p>80 – 100 Minute Session </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">$65.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Pricing -->
    <!-- Our Professional Team -->
    <div class="section-full bg-white content-inner">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Our Professional Team</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/pic1.jpg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Ann Smith</a></h6>
                            <p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/pic2.jpg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Mary Lucas</a></h6>
                            <p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/pic3.jpg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Ann Smith</a></h6>
                            <p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/pic4.jpg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Candice Marshall </a></h6>
                            <p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Professional Team -->
    <!-- Testimonials Of Our Clients -->
    <div class="section-full content-inner" style="background-image:url({{asset('images/background/bg4.jpg')}}); background-position: bottom; background-size:cover;">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Testimonials Of Our Clients</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
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
    <!-- Testimonials Of Our Clients -->
    <!-- Our Latest Blog -->
    <div class="section-full content-inner overlay-white-middle" style="background-image:url({{asset('images/background/bg1.png')}}), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Our Latest Blog</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
            </div>
            <div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
                <div class="item">
                    <div class="blog-post blog-grid blog-style-1">
                        <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="{{asset('images/blog/grid/pic4.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info">
                            <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                    <li class="post-date">September 18, 2020</li>
                                    <li class="post-comment"><a href="#">5k</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title ">
                                <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                            </div>
                            <div class="dlab-post-readmore blog-share"> 
                                <a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-post blog-grid blog-style-1">
                        <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="{{asset('images/blog/grid/pic3.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info">
                            <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                    <li class="post-date">September 18, 2020</li>
                                    <li class="post-comment"><a href="#">5k</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title ">
                                <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                            </div>
                            <div class="dlab-post-readmore blog-share"> 
                                <a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-post blog-grid blog-style-1">
                        <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="{{asset('images/blog/grid/pic2.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info">
                            <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                    <li class="post-date">September 18, 2020</li>
                                    <li class="post-comment"><a href="#">5k</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title ">
                                <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                            </div>
                            <div class="dlab-post-readmore blog-share"> 
                                <a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-post blog-grid blog-style-1">
                        <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="{{asset('images/blog/grid/pic1.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info">
                            <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                    <li class="post-date">September 18, 2020</li>
                                    <li class="post-comment"><a href="#">5k</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title ">
                                <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                            </div>
                            <div class="dlab-post-readmore blog-share"> 
                                <a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Latest Blog -->
</div>
<!-- contact area END -->

@endsection