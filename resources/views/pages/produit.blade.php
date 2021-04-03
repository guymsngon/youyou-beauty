<?php $x = '' ?>
<?php $y = '' ?>
<?php $z = 'active' ?>
<?php $t = '' ?>
@extends('layouts.app')

@section('content')

 <!-- inner page banner -->
 <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{asset('images/banner/bnr2.jpg')}});">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Produits</h1>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li>Nos Produits</li>
                </ul>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>
<!-- inner page banner END -->
<!-- contact area -->
<div class="section-full content-inner">
    <!-- Product -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/1.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Gamme teint Caramel.</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>20000 XAF</del> <span class="text-primary">20000 XAF</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="item-box m-b10 item-style-1">
                    <div class="item-img">
                        <img src="{{asset('images/product/3.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Gamme teint Métissé</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>30000 XAF</del> <span class="text-primary">30000 XAF</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/2.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Gamme teint Claire</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>25000 XAF</del> <span class="text-primary">25000 XAF</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/4.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Crème pour Vergétures</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>10000 XAF</del> <span class="text-primary">10000 XAF</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/7.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Crème bosster fessier</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>10000 XAF</del> <span class="text-primary">10000 XAF</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="item-box m-b10 item-style-1">
                    <div class="item-img">
                        <img src="{{asset('images/product/8.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Eau de Rose</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>5000 XAF</del> <span class="text-primary">5000 XAF</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/23.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Savon Noir</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>2000 XAF</del> <span class="text-primary">2000 XAF</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/10.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Potion Magique</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>3000 XAF</del> <span class="text-primary">3000 XAF</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/14.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Potion Magique pour Pieds et Mains</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>3000 XAF</del> <span class="text-primary">3000 XAF</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="item-box m-b10 item-style-1">
                    <div class="item-img">
                        <img src="{{asset('images/product/13.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Potion Miracle</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>3500 XAF</del> <span class="text-primary">3500 XAF</span></h4>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <!-- Product END -->
</div>
<div class="section-full p-t50 p-b20 bg-gray text-black shop-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="icon-bx-wraper left m-b30">
                    <div class="icon-md text-black radius"> 
                        <a href="#" class="icon-cell text-black"><i class="fa fa-gift"></i></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte font-20">Service Promotionnel </h5>
                        <p class="font-14">Promotion non disponible pour le moment.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="icon-bx-wraper left m-b30">
                    <div class="icon-md text-black radius"> 
                        <a href="#" class="icon-cell text-black"><i class="fa fa-plane"></i></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte font-20">Transport/livraison </h5>
                        <p class="font-14"> Youyou Beauty livre ses produits naturels sur toute l'étendue du térritoire national</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="icon-bx-wraper left m-b30">
                    <div class="icon-md text-black radius"> 
                        <a href="#" class="icon-cell text-black"><i class="fa fa-history"></i></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte font-20">SAV</h5>
                        <p class="font-14">Si les produits de Youyou Beauty ne sont pas satisfaisant, vous pouvez nous contacter</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection