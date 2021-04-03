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
                <h2 class="text-primary m-b10">Services</h2>
                <h6 class="m-b10">Youyou Beauty rapport qualité prix</h6>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Youyou Beauty vous offre les meilleurs services en matière de santé, beauté, coiffure,soins faciaux,esthétiques et bein d'autres...</p>
            </div>
            <div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1 owl-loaded owl-drag">
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="{{asset('images/blog/grid/pic1.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Professionnalisme</a></h5>
                            <p class="m-b15">Une approche professionnelle vous est reservé quand vous demandez nos services.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="{{asset('images/blog/grid/pic2.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Soin Cosmetique de luxe</a></h5>
                            <p class="m-b15">Voulez-vous aller à un rendez-vous galant ou à une soirée de Galla? ne vous inquiétez plus. Les femmes Youyou Beaty est là pour vous Transformer avec ses différents Makeup à savoir: Maquillage du jour, Maquillage du Soir , face painting et Face Painting.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box service-iconbox">
                        <div class="dlab-media dlab-img-overlay5"> <a href="#"><img src="{{asset('images/blog/grid/pic3.jpg')}}" alt=""></a> </div>
                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#" class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                            <h5 class="dlab-title m-t0"><a href="#">Education Medicale</a></h5>
                            <p class="m-b15">Les salons de beauté Youyou Beauty vos offrent les meilleurs idées pour votre santée</p>
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
                <h2 class="text-primary m-b10">Nos Tarifs</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Youyou Beauty met à votre disposition des prix abordables pour vous permettre de vous procurez facilement ses services</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Coiffure et Style</h4>
                            <p>30 – 120 Minute la scéance </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">2000 XAF</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Makeup</h4>
                            <p>30 – 40 Minute la scéance  </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">2000 XAF</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Manicure & Pedicure</h4>
                            <p>10 – 40 Minute la scéance </p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">5000 XAF</h3>
                        </div>
                    </div>
                    <div class="price-tbl d-flex">
                        <div class="flex-grow-1">
                            <h4 class="text-primary">Soins de la Peau</h4>
                            <p>40 – 120 Minute la scéance</p>
                        </div>
                        <div class="price-val align-self-center">
                            <h3 class="text-secondry">3000 XAF</h3>
                        </div>
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
                <h2 class="text-primary m-b10">Notre Equipe de professionnels</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Youyou Beauty est l'un des meilleurs salons qui excelle dans le professionalisme.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/coiffeuse1.jpeg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Une coiffeuse </a></h6>
                            <p class="m-b0">C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/makeuper1.jpeg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Un makeuper</a></h6>
                            <p class="m-b0">Laissez-vous envahir par notre savoir-faire car chez YOUYOU-BEAUTY c'est du professionalisme.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/esth1.jpeg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Une esthéticienne</a></h6>
                            <p class="m-b0">Fini vos problèmes de peau , grace à nos produits cosmétiques faits à base des plantes naturelles YOUYOU-BEAUTY prend le contole total de votre santé.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="service-box text-center">
                        <div class="service-images m-b15">
                            <img src="{{asset('images/our-team/makeuper2.jpeg')}}" alt=""/>
                        </div>
                        <div class="service-content">
                            <h6 class="text-uppercase"><a href="#" class="text-primary">Un makeuper </a></h6>
                            <p class="m-b0">Vous rêvez d'un visage transformé, alors un seul institut YOUYOU-BEAUTY.</p>
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
                <h2 class="text-primary m-b10">Temoignages de nos clients</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p>Une large variété de clients aux besoins et exigences diverses toujours satisfaite </p>
            </div>
            <div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>La créativité c'est chez nous et chez nous vous trouverez la satisfaction que vous recherchez.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">Cliente</strong> <span class="testimonial-position">Etudiante</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic2.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>Ils sont extrêment créatifs ces Professionels de YOUYOU-BEAUTY.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">Cliente</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic3.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>Je pense que c'est génial et je ne saurais trop vous remercier d'avoir travaillé si étroitement avec moi. Toute l'équipe a été formidable de travailler afin que je sois sublime.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">Cliente </strong> <span class="testimonial-position">Une mariée</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>YOUYOU rien à dire j'étais comme une reine tu m'as rendu fabuleuse et féerique.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">Cliente</strong> <span class="testimonial-position">Présentatrice</span> </div>
                    </div>
                </div>
                <div class="item p-a5">
                    <div class="testimonial-9">
                        <div class="testimonial-pic radius style1"><img src="{{asset('images/testimonials/pic2.jpg')}}" width="100" height="100" alt=""></div>
                        <div class="testimonial-text">
                            <p>Toujours belle et nickelle sur mon plateaux.</p>
                        </div>
                        <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonials Of Our Clients -->
</div>
<!-- contact area END -->

@endsection