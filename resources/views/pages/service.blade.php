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
						<h2 class="text-primary m-b10">Services</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Youyou Beauty vous offre les meilleurs services en matière de santé, beauté, coiffure,soins faciaux,esthétiques et bein d'autres...</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-barbershop"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Coiffure et Style</a></h5>
									<p>Les coiffueuses de Youyou Beauty sont des professionnelles , qualifiées et formées qui sont toujours à l'attente de vos recommandations et suggestions. </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-makeup"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Makeup</a></h5>
									<p>Voulez-vous aller à un rendez-vous galant ou à une soirée de Galla? ne vous inquiétez plus. Les femmes Youyou Beaty est là pour vous Transformer avec ses différents Makeup à savoir: Maquillage du jour, Maquillage du Soir , face painting et Face Painting.  </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-makeup-1"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Manicure & Pedicure</a></h5>
									<p>Les salons de beauté Youyou Beauty vos offrent les meilleurs idées pour vos ongles [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman-1"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Soins de la Peau</a></h5>
									<p>Nous offrons les meilleurs services en ce qui est des soins de la peau comme les soins de visage, l'épilation etc. [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Soins Corporels</a></h5>
									<p>Hey!!! fini les problemes de peau et de laits corporels qui ne s'adaptent pas à vos exsigeances Youyou Beauty a tout ce dont il vous faut afin que vous retrouviez la joie.  [...]</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-candle-1"></i></a> </div>
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="#">Massage</a></h5>
									<p>Fini les douleurs corporelles Youyou Beauty vous offre le meilleur services de massage qu'il soit.[...]</p>
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
									<h6 class="dlab-tilte">Nos sommes professionnels </h6>
									<p>Youyou Beauty est l'un des meilleurs salons qui excelle dans le professionalisme.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b10">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-sauna-1"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">Nouvel Equipements </h6>
									<p>Ne vous inquiétez plus Youyou Beauty dispose déjà en son sein des  équipements de beauté dans l'optique de satifaire sa clientèle pour le mieux.</p>
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
						<h2 class="text-primary m-b10">Notre équipe de professionnels</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Youyou Beauty met à votre disposition une équipe de professionnels 7 jours/7 pour votre Bien-être.</p>
					</div>
					<div class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('images/our-team/coiffeuse1.jpeg')}}" alt=""></div>
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
			<div class="section-full video-presentation overlay-black-dark bg-img-fix"  style="background-image:url({{asset('images/background/bg1.jpg')}});">
                <div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 text-white text-center">
							<h2>Video de la   Presentation </h2>
							<p class="max-w700 m-auto">Dans cette vidéo, notre équipe vous montre le travail acherné qui'il abbatent afin de satisfaire les clients.Cliquer sur le button play pour regardez cette vidéo.</p>
							<div class="video-play-icon m-t50">
								<a href="https://www.youtube.com/watch?v=vlNpbhZ7aaM" class="popup-youtube video"><i class="ti-control-play"></i></a>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- Get in touch -->
        <!-- contact area END -->
        </div>
		<!-- contact area END -->

@endsection