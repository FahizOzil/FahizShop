@extends('Front_Layout')

@push('style')
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
@endpush

@section('content')
    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Breadcrumb start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 position-relative d-flex justify-content-center align-items-center">
                <div class="contact-slider my-3">
                    <img src="images/shopSlider.jpg" width="100%" alt="">
                </div>
                <div class="slider-text position-absolute d-flex ">
                    <h3 style="text-transform:uppercase;font-family:Arial, Helvetica, sans-serif;">MY SHOP</h3>
                    <x-breadcrumb />
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-4">
        <div class="container py-5">
            <h2 class="mb-4" style="font-family: cinzel">Welcome To Lizey Shop</h2>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="keywords"
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                <label for="fruits">Default Sorting:</label>
                                <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                    form="fruitform">
                                    <option value="volvo">Nothing</option>
                                    <option value="saab">Latest</option>
                                    <option value="opel">High To Low</option>
                                    <option value="audi">Low To High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4 class="mb-2">Categories</h4>
                                        <ul class="list-unstyled product-category">
                                            <li>
                                                <div class="d-flex justify-content-between category-name">
                                                    <a href="#"><i class="fas fa-tags me-2"></i>Shoes</a>
                                                    <span>(3)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between category-name">
                                                    <a href="#"><i class="fas fa-tags me-2"></i>Shirt</a>
                                                    <span>(5)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between category-name">
                                                    <a href="#"><i class="fas fa-tags me-2"></i>Rings</a>
                                                    <span>(2)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between category-name">
                                                    <a href="#"><i class="fas fa-tags me-2"></i>Watches</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between category-name">
                                                    <a href="#"><i class="fas fa-tags me-2"></i>Men`s</a>
                                                    <span>(5)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4 class="mb-2">Price</h4>
                                        <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput"
                                            min="0" max="500" value="0"
                                            oninput="amount.value=rangeInput.value">
                                        <output id="amount" name="amount" min-velue="0" max-value="500"
                                            for="rangeInput">0</output>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Additional</h4>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-1" name="Categories-1"
                                                value="Beverages">
                                            <label for="Categories-1"> Organic</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-2" name="Categories-1"
                                                value="Beverages">
                                            <label for="Categories-2"> Fresh</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-3" name="Categories-1"
                                                value="Beverages">
                                            <label for="Categories-3"> Sales</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-4" name="Categories-1"
                                                value="Beverages">
                                            <label for="Categories-4"> Discount</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-5" name="Categories-1"
                                                value="Beverages">
                                            <label for="Categories-5"> Expired</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="mb-3">Featured products</h4>
                                    @foreach ($latest_product as $product)
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="/uploads/{{ $product->images['images'][0] }}"
                                                    class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2"> {{ Str::substr($product->title, 0, 40) . '...' }} </h6>
                                                <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">
                                                        {{ GetDiscount($product->price, $product->discount) }}</h5>
                                                    <h5 class="text-danger text-decoration-line-through">
                                                        {{ $product->price }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                    <div class="d-flex justify-content-center my-4">
                                        <button href="#" type="button"
                                            class="btn btn-outline-dark px-4 py-3 rounded-pill w-100">View
                                            More</button>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <img src="uploads/p6.jpg" class="img-fluid w-100 rounded" alt="">
                                        <div class="position-absolute"
                                            style="top: 50%; right: 10px; transform: translateY(-50%);">
                                            <h3 class="text-secondary fw-bold"> New <br> Shoes <br> Style</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center">
                                @foreach ($all_products as $product)
                                    <div class="col-md-6 col-lg-6 col-xl-4 ">
                                        <div class="rounded position-relative fruite-item shopcard">
                                            <div class="fruite-img">
                                                <img src="uploads/{{ $product->images['images'][0] }}"
                                                    class="img-fluid w-100  rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute"
                                                style="top:10px;left:10px;background:rgba(0, 0, 0, 0.3)"> {{ $product->category->name }} </div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                {{-- <h4>Grapes</h4> --}}
                                                <p> {{ Str::substr($product->title, 0, 40) . '...' }} </p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0"> {{ GetDiscount($product->price,$product->discount) }}
                                                        <span class="text-danger text-decoration-line-through">{{$product->price}}</span></p>
                                                    <a href="#" title="cart this item" id="cartbtn"
                                                        class="btn border border-secondary rounded-pill px-3 text-primary mt-2">
                                                        <i class="fa fa-shopping-bag me-1x text-primary"></i> Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    {{ $all_products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->



   


    <!-- Back to Top -->
    <div class="backToTop d-flex justify-content-end position-fixed">
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
                class="fa fa-arrow-up"></i></a>
    </div>
@endsection



@push('js')
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/my.js"></script>
    {{-- <script src="/js/main.js"></script> --}}
@endpush
