<?php $x = '' ?>
<?php $y = 'active' ?>
<?php $z = '' ?>
<?php $t = '' ?>
@extends('layouts.app')

@section('content')

<!-- inner page banner -->
<div class="dlab-bnr-inr overlay-primary" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Services</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Accueil</a></li>
							<li>Nos Services</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
			<!-- About Us -->
			<div class="section-full content-inner-2 bg-white hair-services">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Services</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-barbershop"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Haircut & Styling</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-makeup"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Makeup</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-makeup-1"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Manicure & Pedicure</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman-1"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Skin Care</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Body Treatment</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-candle-1"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Massage</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Us -->
			<div class="section-full content-inner-3 services-box bg-pink-light" style="background-image:url({{asset('images/background/bg5.jpg')}}); background-position: bottom; background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-woman"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">We are Professional</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"><span class="icon-cell text-primary"><i class="flaticon-mortar"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">Lux Cosmetic</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-candle"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">Medical Education</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b10">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-sauna-1"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">The Newest Equipment</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- Our Professional Team -->
			<div class="section-full content-inner-2 overlay-white-middle" style="background-image:url({{asset('images/background/bg1.png')}}), url({{asset('images/background/bg2.png')}}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Professional Team</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('images/our-team/pic1.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('images/our-team/pic2.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('images/our-team/pic3.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('images/our-team/pic5.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('images/our-team/pic4.jpg')}}" alt=""></div>
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
			<div class="section-full video-presentation overlay-black-dark bg-img-fix"  style="background-image:url({{asset('images/background/bg1.jpg')}});">
                <div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 text-white text-center">
							<h2>Video Presentation </h2>
							<p class="max-w700 m-auto">In this video, our staff members tell about their work at Solari, how they achieve the best results for their clients every day and more. Click the Play button below to watch this presentation.</p>
							<div class="video-play-icon m-t50">
								<a href="https://www.youtube.com/watch?v=rICXf0UH7Cg" class="popup-youtube video"><i class="ti-control-play"></i></a>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- Get in touch -->
			<!-- Our Portfolio -->
			<div class="section-full content-inner overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
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
							<div class="blog-post blog-grid">
								<div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="{{asset('images/blog/grid/pic1.jpg')}}" alt=""></a> </div>
								<div class="dlab-info p-t10">
									<div class="dlab-post-title ">
										<h5 class="post-title font-weight-500 m-t0"><a href="#">Latest product, full of marvelous features and functionality</a></h5>
									</div>
									<div class="dlab-post-text">
									   <p>All the Lorem Ipsum generators on the Internet tend to repeat..</p>
									</div>
								   <div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button-link black outline">READ MORE <i class="ti-arrow-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-post blog-grid">
								<div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="{{asset('images/blog/grid/pic2.jpg')}}" alt=""></a> </div>
								<div class="dlab-info p-t10">
									<div class="dlab-post-title ">
										<h5 class="post-title font-weight-500 m-t0"><a href="#">Design a perfect website according to your need and desire</a></h5>
									</div>
									<div class="dlab-post-text">
									   <p>All the Lorem Ipsum generators on the Internet tend to repeat..</p>
									</div>
								   <div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button-link black outline">READ MORE <i class="ti-arrow-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-post blog-grid">
								<div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="{{asset('images/blog/grid/pic3.jpg')}}" alt=""></a> </div>
								<div class="dlab-info p-t10">
									<div class="dlab-post-title ">
										<h5 class="post-title font-weight-500 m-t0"><a href="#">Design a creative website with perfection and smart technology</a></h5>
									</div>
									<div class="dlab-post-text">
									   <p>All the Lorem Ipsum generators on the Internet tend to repeat..</p>
									</div>
								   <div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button-link black outline">READ MORE <i class="ti-arrow-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        <!-- contact area END -->
        </div>
		<!-- contact area END -->

@endsection