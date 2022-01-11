@extends('website.master')

@section('content')
<div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Packages</h3>
                        <p>A Healthy Food, For A Wealthy Mood!</p>
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
                        <h2>{{$package->name}}</h2>
                        <p class="h5">{{($package->details)}}</p>
                        <p class="h5, font-weight-bold" style="color:red">BDT {{$package->price_per_person}}/-</p>
                        <a class="btn btn-warning" href="{{route('giveorder')}}" role="button">Order Now</a>
                        <a class="btn btn-warning" href="{{route('cart.add',$package->id)}}" role="button">Add to cart</a>


                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection