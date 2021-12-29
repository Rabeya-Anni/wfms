@extends('website.master')

@section('content')
<div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Items</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($items as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            
                        </div>
                        <p><img src="{{(url('/uploads/'.$item->image))}}" alt="" height="200px" width="270px"></p>
                        <h2>{{$item->name}}<h2>
                        <p class="h5">{{($item->details)}}</p>
                        <p class="h5, font-weight-bold" style="color:red">{{$item->price_per_person}}/-</p>
                        <a class="btn btn-warning" href="{{route('packageform')}}" role="button">Order Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection