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
                        <img src="{{asset('images/product/item1.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Checked Short Dress</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="item-box m-b10 item-style-1">
                    <div class="item-img">
                        <img src="{{asset('images/product/item2.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Slim Fit Chinos</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item3.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Dark Brown Boots</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item4.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Light Blue Denim Dress</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item5.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Green Trousers</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="item-box m-b10 item-style-1">
                    <div class="item-img">
                        <img src="{{asset('images/product/item6.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Unisex Sunglasses</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item7.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Blue Round-Neck Tshirt</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item8.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Men Grey Casual Shoes</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item1.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Checked Short Dress</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="item-box m-b10 item-style-1">
                    <div class="item-img">
                        <img src="{{asset('images/product/item2.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Slim Fit Chinos</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item3.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Dark Brown Boots</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="item-box m-b10">
                    <div class="item-img">
                        <img src="{{asset('images/product/item4.jpg')}}" alt=""/>
                        <div class="item-info-in">
                            <ul>
                                <!-- <li><a href="#"><i class="ti-shopping-cart"></i></a></li> -->
                                <li><a href="#"><i class="ti-eye"></i></a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-info text-center text-black p-a10">
                        <h6 class="item-title font-weight-500"><a href="#">Light Blue Denim Dress</a></h6>
                        <ul class="item-review">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
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
                        <h5 class="dlab-tilte font-20">Service Promotionnel $60+</h5>
                        <p class="font-14">Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="icon-bx-wraper left m-b30">
                    <div class="icon-md text-black radius"> 
                        <a href="#" class="icon-cell text-black"><i class="fa fa-plane"></i></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte font-20">Worldwide delivery</h5>
                        <p class="font-14">We deliver to the following countries: USA, Canada, Europe, Australia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="icon-bx-wraper left m-b30">
                    <div class="icon-md text-black radius"> 
                        <a href="#" class="icon-cell text-black"><i class="fa fa-history"></i></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte font-20">60 days money back guranty!</h5>
                        <p class="font-14">Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection