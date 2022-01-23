@extends('website.master')

@section('content')
<div class="service_area">
        <div class="container">
            <div class="row">
           <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>About Us</h3>
                        <p>A Healthy Food, For A Wealthy Mood!</p>
                    </div>
                </div>
            </div>
 <!-- single_about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="single_about_text">
					<!-- <h><i>GREEN BOWL CATERING</i></h1><br/> -->
                        <h3>GREEN BOWL CATERING</h3>
                            <p class="about_text1">
                            We Started our Journey on 11 October 2021 
                            so we could free individuals from the problems 
                            of managing cooking.We began in Dhaka and as our business has developed
                            to Seattle and Dhaka and our business have developed 
                            more honed as we grow the nation over. 
                            We benefit Fortune 100 Companies and we benefit new businesses.
                            We benefit office cooking and local gatherings.
                            </p>
                            <!-- <p class="about_text2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            </p> -->
							<div class="order_info">
                            <h1>Our Client Choices</h1>
                            <p>First Meal   |  Main Meal  | Final Meal <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="single_about_thumb thumb_n1">
                        <img src="{{url('img/about/1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- single_about_area_end -->  
                
            </div>
        </div>
    </div>
@endsection
