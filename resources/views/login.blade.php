@extends('Front_Layout')
@push('style')
    <link rel="stylesheet" href="css/style.css">
@endpush
@push('js')
    <script src="js/my.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 position-relative d-flex justify-content-center align-items-center">
                <div class="contact-slider my-3">
                    <img src="images/shopSlider.jpg" width="100%" alt="">
                </div>
                <div class="slider-text position-absolute d-flex ">
                    <h3 style="text-transform:uppercase;font-family:Arial, Helvetica, sans-serif;">Login Account</h3>
                    <x-breadcrumb />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 my-3">
                <h4 class="ms-5"> Log in to your account </h4>
              <div class="form-head d-flex justify-content-center">
                <form class="p-5" id="login-form" method="POST" style="width:40%;border: 1px solid rgb(230, 217, 217)">
                    @csrf
                   <div class="row">
                       <x-input label='Email' type='email' id="email" name='email' placeholder='Email Address'></x-input>
                       <x-input label='Password' id='password' name='password' type='password' placeholder='******'></x-input>
                       <p id="error"> </p>
                   </div>
                   <span> <a class="text-center" href="">Forgot your password?</a> </span>
                   <div class="register-btn d-flex justify-content-center">
                    <button class="btn btn-sm btn-outline-warning px-5 my-3">Login</button>
                </div>
                <hr>
                <div class="text-center">Create New account? <a class="text-primary" href="{{ route('register-page') }}">Click here</a> </div>
                    
                  
                  
                    

                </form>
              </div>

            </div>
        </div>
    </div>
@endsection
