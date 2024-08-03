<!doctype html>
<html lang="en">

<head>
    <title> Lizay @yield('title') </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Cinzel:wght@400..900&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
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
                <img src="/images/logo2.png" width="100%" alt="Logo">
            </a>
        </div>

        <div class="nav-right d-flex justify-content-between">
            <div class="d-flex">
                <input class="form-control rounded" type="search" name="search" id="search" placeholder="Search..."
                    style="width:11rem;height:35px">
            </div>
            <div class="cart position-relative mx-4">
                <i style="font-size:30px;font-weight:600;" class="fa-solid fa-bag-shopping"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </div>
            <div class="cart position-relative">
                <i style="font-size:30px;" class="fa-solid fa-list"></i>
            </div>
            <div class="cart position-relative mx-4 dropdown dropdown-toggle">
                <i style="font-size:25px;font-weight:300;" class="fas fa-user"> </i> 
                <span class="user-profile"> @auth
                    {{ Auth::user()->username }}
                @endauth </span>    
                <ul class="dropdown-menu">
                    @guest
                        <li class="dropdown-item"><a href="{{ route('login-page') }}" class="dropdown-link">Sign In</a></li>
                        <li class="dropdown-item"><a href="{{ route('register-page') }}" class="dropdown-link">Sign Up</a>
                        </li>
                    @endguest
                    @auth
                        <li class="dropdown-item "><a href="" class="dropdown-link">Manage My Account</a> </li>
                        <li class="dropdown-item "><a href="" class="dropdown-link">My return & cancellation</a></li>
                        <li class="dropdown-item "><a href="" class="dropdown-link">My Orders</a></li>
                        <li class="dropdown-item " id="logout"><a href="{{ route('logout') }}" class="dropdown-link">Logout</a> </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <hr>


    {{-- menu  --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav d-felx justify-content-center">
                    <li class="nav-item"> <a class="nav-link text-dark" href="{{ route('home-page') }}"> <b>Home</b>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href="{{ route('shop-page') }}"> <b>Shop</b>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href=""> <b>Features</b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href="{{ route('contact-page') }}"> <b>Contact
                                Us </b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href=""> <b>About Us </b> </a> </li>
                    <li class="nav-item"> <a class="nav-link text-dark" href=""> <b>Blog </b> </a> </li>
                </ul>
            </div>
        </div>
    </div>



    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        <div class="container py-5">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="#">
                            <h1 class="text-primary mb-0">Lizay</h1>
                            <p class="text-secondary mb-0">Fresh products</p>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mx-auto">
                            <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number"
                                placeholder="Your Email">
                            <button type="submit"
                                class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white"
                                style="top: 0; right: 0;">Subscribe Now</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-end pt-3">
                            <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Why People Like us!</h4>
                        <p class="mb-4">typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                        <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read
                            More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Shop Info</h4>
                        <a class="btn-link" href="">About Us</a>
                        <a class="btn-link" href="">Contact Us</a>
                        <a class="btn-link" href="">Privacy Policy</a>
                        <a class="btn-link" href="">Terms & Condition</a>
                        <a class="btn-link" href="">Return Policy</a>
                        <a class="btn-link" href="">FAQs & Help</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Account</h4>
                        <a class="btn-link" href="">My Account</a>
                        <a class="btn-link" href="">Shop details</a>
                        <a class="btn-link" href="">Shopping Cart</a>
                        <a class="btn-link" href="">Wishlist</a>
                        <a class="btn-link" href="">Order History</a>
                        <a class="btn-link" href="">International Orders</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Contact</h4>
                        <p>Address: 1429 Netus Rd, NY 48247</p>
                        <p>Email: Example@gmail.com</p>
                        <p>Phone: +0123 4567 8910</p>
                        <p>Payment Accepted</p>
                        <img src="img/payment.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a class="text-light" href="#"><i
                                class="fas fa-copyright  me-2"></i>Your Site Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    Designed By <a class="border-bottom text-primary" href="">Fahizozil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->




    @stack('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
