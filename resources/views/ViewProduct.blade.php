@extends('Front_Layout')
@push('style')
    <link rel="stylesheet" href="/css/style.css">
@endpush
@push('js')
    <script src="/js/my.js"></script>
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                            aria-label="First slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach ($product->images['images'] as $img)
                            <div class="carousel-item active">
                                <img src="/uploads/{{ $img }}" class="w-100 d-block" alt="First slide" />
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

            <div class="col-md-7 mt-3 ps-5">
                {{-- <div class="product-price position-relative">
                    <h4 style="font-family:sans-serif" class="text-danger ">{{ 'Rs:' . floor($discount) }} |
                        <small><del>{{ $product->price }} </del></small></h4>
                    <span style="top: -10px; left: 19%" class="badge bg-info position-absolute">{{ Number::percentage($product->discount) }}</span>
                </div> --}}
                <h5 class="my-3 font-300" style="font-family:sans-serif">{{ ucwords($product->title) }}</h5>
                <div class="row">
                    <div class="col-md-6">
                        <h5 style="font-family:sans-serif">Quantity:</h5>
                        <input type="number" min="1" max="10" value="1" class="form-control">
                    </div>
                    <div class="col-md-6">
                        @if ($product->colors)
                            <h5 style="font-family:sans-serif">Color:</h5>
                            <select class="form-select">
                                <option selected>Select Color</option>
                                @foreach ($product->colors['colors'] as $color)
                                    <option value="1"> {{ $color }} </option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>
                <div class="row my-2">
                    @if ($product->size)
                        <h5 style="font-family:sans-serif">Size:</h5>
                    @endif
                </div>



                <div class="all_product mt-3">
                    <h6> more items </h6>
                    @foreach ($product->images['images'] as $img)
                        <img src="/uploads/{{ $img }}" alt="" width="100px">
                    @endforeach

                </div>
                <button type="button" class="btn btn-primary btn-block my-3">Buy</button>
                <button type="button" class="btn btn-primary btn-block my-3">Add to Cart</button>
            </div>

        </div>
    </div>
    </div>

    <div class="container">
        <h5> Product Details </h5>
        <p>{{ $product->description }}</p>
        <h5> Reviews </h5>
        <div class="row">
            {{-- @foreach ($reviews as $review) --}}
            <div class="col-md-12">
                <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title text-dark">fahiz</h5>
                        <p class="card-text text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit,
                            reprehenderit!</p>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title text-dark">fahiz</h5>
                        <p class="card-text text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit,
                            reprehenderit!</p>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title text-dark">fahiz</h5>
                        <p class="card-text text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit,
                            reprehenderit!</p>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title text-dark">fahiz</h5>
                        <p class="card-text text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit,
                            reprehenderit!</p>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title text-dark">fahiz</h5>
                        <p class="card-text text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit,
                            reprehenderit!</p>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5 class="mt-3"> Add Review </h5>
                <form>
                    <div class="form-group">
                        <input type="hidden" name="pid" class="form-control" value="{{ $product->id }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Your Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Write a Review</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5>Related Products</h5>
                <div class="row">
                    @foreach ($related_product as $product)
                        <div class="col-md-4">
                            <div class="card" style="width: 20rem">
                                <img src="/uploads/{{ $product->images['images'][0] }}" class="card-img-top"
                                    alt="{{ $product->title }}">
                                <div class="card-body">
                                    <h5 class="text-dark card-title"> {{ $product->title }} </h5>
                                    <p class="card-text text-dark"> {{"Rs:" . $product->price }} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
