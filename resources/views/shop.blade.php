@extends('Front_Layout')

@push('style')
    <link rel="stylesheet" href="css/style.css">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="Shop-slider my-3 position-relative d-flex justify-content-center align-items-center">
                    <img src="images/shopSlider.jpg" width="100%" alt="">

                    <div class="slider-text position-absolute d-flex ">
                        <h3 style="text-transform:uppercase;font-family:Arial, Helvetica, sans-serif;">Beauty And Cosmitics
                        </h3>
                        <x-breadcrumb />
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- start shop content  --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar-head">
                <div class="sidebar">
                    {{-- shop  --}}
                    <div class="sidebar-option shop">
                        <div class="sidebar-heading mt-5 ">
                            <h4 style="font-family:sans-serif;">Our Shop</h4>
                        </div>
                        <ul class="nav sidebar-list">
                            <li class="nav-item dropdown"><a class="nav-link text-muted dropdown-toggle sidebar">Beauty and
                                    Cosmetic</a>
                                <div class="dropdown-menu sidebar-dropdownMenu">
                                    <ul class="navs">
                                        <small>
                                            <li class="nav-item"> <a class="nav-link" href="#">Perfume</a> </li>
                                        </small>
                                        <small>
                                            <li class="nav-item"> <a class="nav-link" href="/about">Cosmetic</a> </li>
                                        </small>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item dropdown"><a class="nav-link text-muted dropdown-toggle sidebar">Fashion and
                                    Accessories</a>
                                <div class="dropdown-menu  sidebar-dropdownMenu">
                                    <ul class="navs">
                                        <small>
                                            <li class="nav-item"> <a class="nav-link" href="#">Perfume</a> </li>
                                        </small>
                                        <small>
                                            <li class="nav-item"> <a class="nav-link" href="/about">Cosmetic</a> </li>
                                        </small>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    {{-- categories  --}}
                    <div class="sidebar-option categories">
                        <div class="sidebar-heading mt-5 ">
                            <h4 style="font-family:sans-serif;">Categories</h4>
                        </div>

                        <div class="checkbox d-flex justify-content-center flex-column">
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span>
                                <a class="ms-2" href=""> All Accessories <span> (8) </span></a>
                            </label>
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span>
                                <a class="ms-2" href="">Men`s Shoes <span> (8) </span></a>
                            </label>
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span>
                                <a class="ms-2" href=""> Sport Shoes <span> (8) </span></a>
                            </label>
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span>
                                <a class="ms-2" href=""> Jacket <span> (8) </span></a>
                            </label> <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span>
                                <a class="ms-2" href=""> Jacket <span> (8) </span></a>
                            </label> <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span>
                                <a class="ms-2" href=""> Jacket <span> (8) </span></a>
                            </label> <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span>
                                <a class="ms-2" href=""> Jacket <span> (8) </span></a>
                            </label>
                        </div>

                    </div>
                    {{-- range price  --}}
                    <div class="sidebar-option price">
                        <div class="sidebar-heading mt-5 ">
                            <h4 style="font-family:sans-serif;">Price</h4>
                        </div>
                        <div class="ranger">
                            <label class="form-label" for="">RKR 300-PKR 10,000</label> <br>
                            <input type="range" min="300" max="10000" value="300" class="from-range">
                        </div>

                    </div>
                    {{-- size  --}}
                    <div class="sidebar-option size">
                        <div class="sidebar-heading mt-5 ">
                            <h4 style="font-family:sans-serif;">Size</h4>
                        </div>
                        <div class="checkbox d-flex justify-content-center flex-column">
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span> <a class="ms-2" href=""> S </a> </label>
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span> <a class="ms-2" href=""> M </a> </label>
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span> <a class="ms-2" href=""> L </a> </label>
                            <label class="my-1" for=""> <span> <input type="checkbox" name=""
                                        id=""></span> <a class="ms-2" href=""> XL </a> </label>
                        </div>
                    </div>
                    {{-- End SideBar Options  --}}
                </div>
            </div>

            <div class="col-md-8">
                {{-- product Section  --}}
                <div class="product-head details-product mt-5">
                    <div class="head-left">
                        <div class="grid-icon ps-1 float-start me-5">
                            <ul class="nav">
                                <li> <span class="mx-2 active"><i class="fas fa-bars"></i></span> </li>
                                <li> <span class="mx-1"><i class="fas fa-barcode"></i></span> </li>
                            </ul>
                        </div>

                        <div class="show-pages">
                            <span class="text-muted text-light"> Showing 1-12 0f 22 item(s) </span>
                        </div>
                    </div>

                    <div class="head-right me-5">
                        <div class="sort-by d-flex">
                            <span class="text-muted mt-1" style="font-size: 16px">Sort by:</span>
                            <select class="form-select form-select-sm rounded-pill">
                                <option class="text-muted" selected disabled>Relevance</option>
                                <option value="1">Popularity</option>
                                <option value="2">Price: Low to High</option>
                                <option value="3">Price: High to Low</option>
                                <option value="4">Newest First</option>
                            </select>

                        </div>

                    </div>
                </div>

                {{-- card row  --}}
                <div class="row">
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                    <div class="col-md-4">
                        <x-card title="Kamet Efficitur Ligula" url="images/p1.jpg" price=12500 style="width:15rem;" />
                    </div>
                </div>
                {{-- end card  --}}

                <div class="row">
                    <div class="product-head details-product my-3">

                        <div class="head-left mt-2">
                            <div class="grid-icon ps-1 float-start me-5">
                                <ul class="nav">
                                    <li> <span class="mx-2 active"><i class="fas fa-bars"></i></span> </li>
                                    <li> <span class="mx-1"><i class="fas fa-barcode"></i></span> </li>
                                </ul>
                            </div>

                            <div class="show-pages">
                                <span class="text-muted text-light"> Showing 1-12 0f 22 item(s) </span>
                            </div>
                        </div>

                        <div class="head-right me-5"> 
                            {{-- pagination  --}}
                            <div class="pagination">
                                <a href="#" class="page-link ">1</a>
                                <a href="#" class="page-link">2</a>
                                <a href="#" class="page-link">&raquo;</a>
                            </div>

                        </div>
                    </div>
                </div>


            </div> {{-- col 9 end here --}}


        </div>
    </div>
@endsection

@push('js')
    <script src="js/my.js"></script>
@endpush
