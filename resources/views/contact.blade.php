@extends('Front_Layout')
@push('style')
    <link rel="stylesheet" href="css/style.css">
@endpush

@php
    $previous_file = pathinfo(url()->previous(), PATHINFO_FILENAME);
    $current_url = pathinfo(url()->current(), PATHINFO_FILENAME);

    if ($previous_file == '127.0.0' || $previous_file == $current_url) {
        $previous_file = 'Home';
    }
@endphp

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 position-relative d-flex justify-content-center">
                <div class="contact-slider my-3">
                    <img src="images/shopSlider.jpg" width="100%" alt="">
                </div>

                <x-breadcrumb :prev=$previous_file :current=$current_url />

            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row my-3">
            <div class="col-md-3 ">
                <div class="head d-flex justify-content-center">
                    <div class="details">
                        <i class="fas fa-phone" style="font-size:28px"> </i>
                    </div>
                </div>
            <div class="more-details d-flex flex-column justify-content-center">
                <h5 > Phone </h5>
                <p class="text-muted"> phone 1 : (+123)-456-7890 <br>  phone 1 : (+123)-456-7890 </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="head d-flex justify-content-center">
            <div class="details">
                <i class="fas fa-location-dot" style="font-size:28px"> </i>
            </div>
            </div>
        <div class="more-details">
            <h5> Address </h5>
            <p class=" text-muted"> Haji shah Ali goth sharafi kirangi karachi pakistan  </p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="head d-flex justify-content-center">
        <div class="details">
            <i class="fas fa-envelope" style="font-size:28px"> </i>
        </div>
        </div>
    <div class="more-details">
        <h5> Email </h5>
        <p> Fahizozil17@gmail.com <br>
            Fahizjan123@gmail.com </p>
    </div>
</div>

<div class="col-md-3">
    <div class="head d-flex justify-content-center">
    <div class="details">
        <i class="fas fa-stopwatch" style="font-size:28px"> </i>
    </div>
    </div>
<div class="more-details ">
    <h5> Opening Time </h5>
    <p> Monday-Saturday: 6AM - 9PM <br>
        Sunday: Closed </p>
</div>
</div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <h2 id="con-form-h my-2"> Contact us </h2>
                <form action=" {{ route('mail') }} " method="POST" enctype="multipart/form-data">
                @csrf
                <x-input label="Name"  name="name"  placeholder="Enter Your Name">
                    <small class="text-danger"> @error('name') {{ $message }}  @enderror </small>
                </x-input>
                <x-input label="Email"  name="email" type="email"  placeholder="Email Address">
                    <small class="text-danger"> @error('email') {{ $message }}  @enderror </small>
                </x-input>
                <x-input label="Attachment" type="file"  name="attach">
                    <small class="text-danger"> @error('attach') {{ $message }}  @enderror </small>
                </x-input>
                <div class="mb-2">
                    <label for="" class="form-label">Message</label>
                    <textarea name="message" id="" cols="30" rows="3" class="form-control" spellcheck="true"></textarea>
                    <small class="text-danger"> @error('message') {{ $message }}  @enderror </small>
                </div>
                <div class="save-msg d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning btn-sm px-4">Send</button>
                </div>
                </form>
               @if (session("success"))
                <div class="alert alert-success my-3" role="alert">
                    {{ session("success") }}
                </div>
                @endif
                
                @if (session("error"))
                <div class="alert alert-danger my-3" role="alert">
                    {{ session("error") }}
                </div>
                @endif
               
                   
            
            </div>
        </div>
    </div>
@endsection
