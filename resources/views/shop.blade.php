@extends('Front_Layout')

@push('style')
    <link rel="stylesheet" href="css/style.css">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 position-relative">
              <div class="Shop-slider my-3">
                <img src="images/shopSlider.jpg" width="100%" alt="">
              </div>
              <div class="slider-text text-center position-absolute ">
                <h1>Beauty And Cosmitics</h1>
                {{-- <a href="#" class="btn btn-primary">Discover Now</a> --}}
                {{-- continue work  --}}
              </div>
            </div>
        </div>
    </div>
@endsection