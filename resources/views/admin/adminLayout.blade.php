<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- start navabr  -->
    <nav class="navbar navbar-expand-lg justify-content-between" style="background-color:#191C24;">
        <a href="" class="navbar-brand ps-3 text-danger"> <i class="fab fa-affiliatetheme"></i> FAHIZ SHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="nav me-5">
            <li  class="nav-item text-secondary dropdown"> <a class="nav-link text-secondary dropdown-toggle"> <span
                        class="side-icon"><i class="fas fa-envelope"></i></span> Message</a>
                <ul class="dropdown-menu" >
                    <li class="dropdown-item"> <a href="">Action</a> </li>
                </ul>
            </li>
            <li class="nav-item text-secondary dropdown"> <a class="nav-link text-secondary dropdown-toggle"> <span
                        class="side-icon"><i class="fas fa-bell"></i></span> Notifation</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"> <a href="">Action</a> </li>
                </ul>
            </li>
            <li class="nav-item text-secondary dropdown"> <a class="nav-link text-secondary dropdown-toggle"> <img
                        class="rounded-circle" src="/images/face19.jpg" width="40px" alt=""> fahiz.ozil </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="/admin/category">Profile</a></li>
                    <li class="dropdown-item"><a href="">Setting</a></li>
                    <li class="dropdown-item"><a href="">Logout</a></li>
                </ul>
            </li>
        </ul>
          </div>
    </nav> <!-- end navbar --> <!-- start 2nd row sidebar And Content  -->
    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <div class="col-md-2 sidebar">
                <!-- side-profile  -->
                <div class="side-profile ms-3 mt-3">
                    <img class="rounded-circle float-start" src="/images/face19.jpg" width="45px" alt="profile">
                    <div class="p-details" style="margin-left: 60px;">
                        <h5 class="text-light mb-0"> fahiz.ozil </h5>
                        <span class="text-secondary"> Admin </span>
                    </div>
                </div> <!-- end side-profile -->

                <!-- start sidepage links  -->
                <div class="sidebar-link mt-4">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link active " href="/admin/dashboard"><span
                                    class="side-icon "> <i class="fas fa-stopwatch"></i> </span> Dashboard </a></li>
                        <li class="nav-item"><a class="nav-link " href="">
                                <span class="side-icon"> <i class="fas fa-user-clock"></i> </span> Customers </a> </li>
                        <li class="nav-item"><a class="nav-link">
                                <span class="side-icon"> <i class="fas fa-tag"></i> </span> Category </a> </li>
                        <li class="nav-item"><a class="nav-link " href="">
                                <span class="side-icon"> <i class="fas fa-box-open"></i> </span> Orders </a></li>
                        <li class="nav-item"><a class="nav-link">
                                <span class="side-icon"> <i class="fas fa-shirt"></i> </span> Product </a></li>
                        <li class="nav-item"><a class="nav-link" href="">
                                <span class="side-icon"> <i class="fas fa-gear"></i> </span> Setting </a></li>
                    </ul>
                </div>

            </div> <!-- End sidebar  -->

            <!-- content  -->
            <div class="col-10">
            
              @hasSection ('content')
                  @yield('content')
              @else
                  <h1> No Content Found </h1>
              @endif
                       

               
               

                <!-- start footer  -->
                <footer>
                    <div class="row">
                        <div class="col-md-12" style="background-color: #191C24;">
                            <p class="text-center text-secondary">Copyright &copy; 2024 All Right Reserved</p>
                        </div>
                    </div>
                </footer>



            </div> <!-- content end  -->
        </div>
    </div>
<script src="/js/jquery.js"></script>
@stack('script');
</body>
</html>
