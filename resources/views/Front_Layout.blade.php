<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    @stack('style')
</head>

<body>

    <nav class="navbar navbar-expand-lg justify-content-around">
        <div class="nav-left">
            <ul class="nav">
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-dark"> English </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"> <a href="">Urdu</a> </li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-dark">EUR</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"> <a href="">USD</a> </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="nav-center">
            <a class="nav-brand" href="">
                <img src="images/logo2.png" width="100%" alt="Logo">
            </a>
        </div>

        <div class="nav-right d-flex justify-content-between">
            <div class="d-flex">
                <input class="form-control rounded" type="search" name="search" id="search" placeholder="Search..."
                    style="width:11rem;height:35px">
            </div>
            <div class="cart position-relative mx-4">
                <i style="font-size:30px;font-weight:700;" class="fa-solid fa-bag-shopping"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </div>
            <div class="cart position-relative">
                <i style="font-size:30px" class="fa-solid fa-list"></i>
            </div>
        </div>
    </nav>
    <hr>


    {{-- menu  --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav d-felx justify-content-center">
                    <li class="nav-item"> <a class="nav-link text-dark" href="{{ route('home-page') }}"> <b>Home</b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href="{{ route('shop-page') }}"> <b>Shop</b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href=""> <b>Features</b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href="{{ route('contact-page') }}"> <b>Contact Us </b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href=""> <b>About Us </b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href=""> <b>Blog </b> </a> </li>
                </ul>
            </div>
        </div>
    </div>

   

    @yield('content')

    {{-- start footer  --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="footer p-3">

                    <div class="footer-l">
                        <h5 class="text-light mt-2"> <i class="fab fa-telegram "></i> NEWSLETTER SUBSCRIBE </h5>
                    </div>
                    <div class="left-cener">
                            <div class="d-flex">
                                <input class="form-control" type="text" name="search" id="search"
                                placeholder="Enter your Email" style="width:23rem;">
                                <button style="border-radius:0%" class="btn btn-dark px-4"><b>Subscribe</b></button>
                            </div>
                    </div>
                    <div class="footer-r">
                        <ul class="nav mt-2">
                            <li class="list-item mx-1"> <i class="fab fa-facebook-square"></i> </li>
                            <li class="list-item mx-1"> <i class="fab fa-whatsapp-square"></i> </li>
                            <li class="list-item mx-1"> <i class="fab fa-google-plus-square"></i> </li>
                            <li class="list-item mx-1"> <i class="fab fa-instagram-square"></i> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between">
                <div class="icon">
                    <i style="font-size: 40px" class="fab fa-forumbee"></i>
                    <p class="text-muted mt-2"> How To Order </p>
                </div>
                <div class="icon">
                    <i style="font-size: 40px" class="fa-solid fa-gem"></i>
                    <p class="text-muted mt-2" style="text-align: center"> MemberShip Benefits </p>
                </div>
                <div class="icon">
                    <i style="font-size: 40px" class="fa-solid fa-file-lines"></i>
                    <p class="text-muted mt-2"> Notice & News </p>
                </div>
                <div class="icon">
                    <i style="font-size: 40px" class="fa-regular fa-circle-question"></i>
                    <p class="text-muted mt-2"> Questions & Answer </p>
                </div>
                <div class="icon">
                    <i style="font-size: 40px" class="fa-solid fa-user"></i>
                    <p class="text-muted mt-2">  C  /  S  Center </p>
                </div>
                <div class="icon">
                    <i style="font-size: 40px" class="fa-solid fa-code-pull-request"></i>
                    <p class="text-muted  mt-2"> Request Item </p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="footer-link nav">
                    <li class="nav-item "> <a class="nav-link text-muted" href="">About Us</a> </li>
                    <li class="nav-item "> <a class="nav-link text-muted" href="">Contact Us</a> </li>
                    <li class="nav-item "> <a class="nav-link text-muted" href="">Shopping Gulide</a> </li>
                    <li class="nav-item "> <a class="nav-link text-muted" href="">Customer Servers</a> </li>
                    <li class="nav-item "> <a class="nav-link text-muted" href="">Customer Servers</a> </li>
                    <li class="nav-item "> <a class="nav-link text-muted" href="">Terms And User</a> </li>
                    <li class="nav-item "> <a class="nav-link text-muted" href="">Privacy</a> </li>
                    <li class="nav-item "> <a class="nav-link text-muted" href="">Wholesale</a> </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5> Customer Service </h5>
                <p><i class="fab fa-whatsapp"></i> 03021203890</p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
            </div>
            <div class="col-md-4">
                <h5> Customer Service </h5>
                <p><i class="fab fa-whatsapp"></i> 03021203890</p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
            </div>
            <div class="col-md-4">
                <h5> Customer Service </h5>
                <p><i class="fab fa-whatsapp"></i> 03021203890</p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
                <p class="text-muted"> Weekdays.....09:00AM - 06:00PM </p>
            </div>
        </div>
    </div>
</body>

</html>
