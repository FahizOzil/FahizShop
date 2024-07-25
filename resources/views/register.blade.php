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
                    <h3 style="text-transform:uppercase;font-family:Arial, Helvetica, sans-serif;">Create An Account</h3>
                    <x-breadcrumb />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 my-3">
                <h4 class="ms-5"> Create An Account </h4>
              <div class="form-head d-flex justify-content-center">
                <form id="register-form" method="POST" style="width:50%" >
                    @csrf
                   <div class="row">
                    <div class="col-md-6">
                        <x-input label='Full Name'  id='name'  name='name' placeholder='Enter Your Name'></x-input>
                        <x-input label='Email Address' id='email' name='email' type='email' placeholder='Email Address'></x-input>
                        <x-input label='Password' id='password' name='password' type='password' placeholder='******'></x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input label='Username' id='username' name='username' placeholder='@username'></x-input>
                        <x-input label='Phone' id='phone_number' name='phone_number' type='number'  placeholder='Phone Number'></x-input>
                        <x-input label='Address' id="address" name='address' placeholder='Your Address'></x-input>
                    </div>
                   </div>

                   <div class="register-btn d-flex justify-content-center">
                    <button class="btn btn-sm btn-outline-warning">Register</button>
                   </div>
                    
                  
                  
                    

                </form>
              </div>

            </div>
        </div>
    </div>
@endsection
