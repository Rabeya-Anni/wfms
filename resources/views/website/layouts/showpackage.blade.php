@extends('website.master')

@section('content')
<div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Packages</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($packages as $key=>$package)
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            
                        </div>
                        <p><img src="{{(url('/uploads/'.$package->image))}}" alt="" height="200px" width="270px" ></p>
                        <h4>{{$package->name}}</h4>
                        <h4>$ {{$package->price_per_person}}</h4>
                        <h4>{{($package->details)}}</h4>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection