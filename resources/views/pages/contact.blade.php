<?php $x = '' ?>
<?php $y = '' ?>
<?php $z = '' ?>
<?php $t = 'active' ?>
@extends('layouts.app')

@section('content')

<!-- inner page banner -->
<div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Contactez Nous</h1>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li>Contactez Nous</li>
                </ul>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>
<!-- inner page banner END -->
<!-- contact area -->
<div class="section-full content-inner bg-white contact-style-1">
    <div class="container">
        <div class="row">
            <!-- right part start -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch ">
                    <h4 class="m-b10">Contact Rapide</h4>
                    <p>Pour toutes vos question n'hésitez pas</p>
                    <ul class="no-margin">
                        <li class="icon-bx-wraper left m-b30">
                            <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                            <div class="icon-content">
                                <h6 class="text-uppercase m-tb0 dlab-tilte">Addresse:</h6>
                                <p>Yaounde(Essos)-Douala(Akwa)</p>
                            </div>
                        </li>
                        <li class="icon-bx-wraper left  m-b30">
                            <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-email"></i></a> </div>
                            <div class="icon-content">
                                <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                <p>fotsobeauty@gmail.com</p>
                            </div>
                        </li>
                        <li class="icon-bx-wraper left  m-b30">
                            <div class="icon-bx-xs border-1"> <a href="https://wa.me/237696817443" class="icon-cell"><i class="fa fa-whatsapp my-float"></i></a> </div>
                            <div class="icon-content">
                                <h6 class="text-uppercase m-tb0 dlab-tilte">Whatsapp:</h6>
                                <p>Contact Whatsapp</p>
                            </div>
                        </li>
                        <li class="icon-bx-wraper left">
                            <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                            <div class="icon-content">
                                <h6 class="text-uppercase m-tb0 dlab-tilte">Téléphone</h6>
                                <p>+237 696 817 443</p>
                            </div>
                        </li>
                    </ul>
                    <div class="m-t12">
                        <center>
                        <ul class="dlab-social-icon dlab-social-icon-lg">
                            <li><a href="https://www.facebook.com/Laboratoire-youyou-beauté-107245131245122" class="fa fa-facebook bg-primary"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram bg-primary"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
                        </ul></center>
                    </div>
                </div>
            </div>
            <!-- right part END -->
            <!-- Left part start -->
            <div class="col-lg-4 col-md-6 m-b30">
                <div class="p-a30 bg-gray clearfix">
                    <h4>Envoiez nous un Message </h4>
                    <div class="dzFormMsg"></div>
                    <form method="post" class="dzForm" action="https://beautyzone.dexignzone.com/xhtml/script/contact.php">
                    <input type="hidden" value="Contact" name="dzToDo" >
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group"> 
                                        <input name="dzEmail" type="email" class="form-control" required  placeholder="Votre Email Id" >
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Votre Message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                        <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button name="submit" type="submit" value="Submit" class="site-button "> <span>Envoyer</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Left part END -->
            <div class="col-lg-4 col-md-12 d-flex m-b30">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch " style="border:0; width:100%; height:100%;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- contact area  END -->

@endsection