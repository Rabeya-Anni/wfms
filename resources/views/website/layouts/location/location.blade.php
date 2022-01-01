@extends('website.master')

@section('content')
<div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Location</h3>
                        <p>A Healthy Food, For A Wealthy Mood!</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <center><div class="mapouter">
            <div class="gmap_canvas"><iframe width="948" height="784" id="gmap_canvas" src="https://maps.google.com/maps?q=cape%20town&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://2torrentz.net"></a></div><style>.mapouter{position:relative;text-align:right;height:784px;width:948px;}.gmap_canvas {overflow:hidden;background:none!important;height:784px;width:948px;}</style>
            </div></center>   
                
            </div>
        </div>
    </div>
@endsection
