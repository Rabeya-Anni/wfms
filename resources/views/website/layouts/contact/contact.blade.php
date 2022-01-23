@extends('website.master')

@section('content')
<div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Contact</h3>
                        <p>A Healthy Food, For A Wealthy Mood!</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <section class="contact-section">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
							<div class="mapouter">
							<div class="gmap_canvas">
							<iframe width="735" height="524" id="gmap_canvas" src="https://maps.google.com/maps?q=cape%20town&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<a href="https://2torrentz.net"></a></div><style>.mapouter{position:relative;text-align:right;height:524px;width:735px;}.gmap_canvas {overflow:hidden;background:none!important;height:524px;width:735px;}</style>
							</div>
							
							</div>
                            
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
					<div class="col-12">
                        <h2 class="contact-title">Information</h2>
                    </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-home"></i></span>
                            <div class="media-body">
                                <h3>[Uttara-Dhaka]</h3>
                                <p>[PO Box]</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-tablet"></i></span>
                            <div class="media-body">
                                <h3>[+8801 7222 81265]</h3>
                                <p>[8:00am to 12:00am]</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-envelope"></i></span>
                            <div class="media-body">
                                <h3>[greenbowl@gmail.com]</h3>
                                <p>Send us a e-mail anytime for a event!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
                
            </div>
        </div>
    </div>
@endsection
