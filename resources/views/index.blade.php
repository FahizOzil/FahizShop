@extends('Front_Layout')
@push('style')
    <link rel="stylesheet" href="css/style.css">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/my.js"></script>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" aria-label="First slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="images/sample-1.jpg" class="w-100 d-block" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                            <img src="images/sample-2.jpg" class="w-100 d-block"alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                            <img src="images/sample-3.jpg" class="w-100 d-block" alt="Third slide" />
                        </div>
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
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-image d-flex justify-content-between">
                    <img src="images/cat-1.jpg" alt="image1">
                    <img src="images/cat-2.jpg" alt="image2">
                    <img src="images/cat-3.jpg" alt="image3">
                    <img src="images/cat-4.jpg" alt="image4">
                    {{-- <img src="images/cat-1.jpg" alt="image5"> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- top ranking --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head d-flex justify-content-center position-relative">
                    <h3 class="top-ranking mt-4"> TOP RANKING </h3>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach ($top_ranking as $product)
                <div class="col-md-4">
                    @foreach ($product->images as $image)
                        <x-card :title="$product->title" :url="'uploads/' . $image" :price="$product->price" :id="$product->id"
                            style="width:20rem" />
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
    {{-- end top ranking  --}}


    {{-- manner  --}}
    <div class="container">
        <div class="row">
            <div class="md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slide-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide-3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide-1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- LAtest Product --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head d-flex justify-content-center position-relative">
                    <h3 class="top-ranking mt-4"> LATEST PRODUCT </h3>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach ($all_product as $product)
                <div class="col-md-3">
                    @foreach ($product->images as $image)
                        <x-card :title="$product->title" :url="'uploads/' . $image" :price="$product->price" :id="$product->id"
                            style="width:15rem;" />
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>

    {{-- blogs  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head d-flex justify-content-center position-relative">
                    <h3 class="top-ranking mt-4"> LATEST FROM BLOG </h3>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
    </div>

    {{-- start blogs  --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white my-2" style="width:23rem;border:none">
                    <img class="card-img-top" src="images/b.jpg" alt="Title" />
                    <div class="card-body">
                        <h6 class="card-title text-dark">Kamet Efficitur Ligula </h6>
                        <p class="card-text text-dark">
                            {{ Str::substr(
                                " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.
                                                         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.
                                                         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.",
                                0,
                                100,
                            ) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white my-2" style="width:23rem;border:none">
                    <img class="card-img-top" src="images/b2.jpg" alt="Title" />
                    <div class="card-body">
                        <h6 class="card-title text-dark">Kamet Efficitur Ligula </h6>
                        <p class="card-text text-dark">
                            {{ Str::substr(
                                " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.
                                                         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.
                                                         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.",
                                0,
                                100,
                            ) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white my-2" style="width:23rem;border:none">
                    <img class="card-img-top" src="images/b3.jpg" alt="Title" />
                    <div class="card-body">
                        <h6 class="card-title text-dark">Kamet Efficitur Ligula </h6>
                        <p class="card-text text-dark">
                            {{ Str::substr(
                                " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.
                                                         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.
                                                         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reprehenderit quisquam cum corporis voluptatem aut, error officia, illum alias natus explicabo distinctio maiores pariatur aliquid nisi dolorem eum. Sed repellendus sunt eaque maiores quos accusamus, error quam rem. Iste totam deserunt recusandae quaerat incidunt excepturi itaque voluptatibus commodi repellat ex.",
                                0,
                                100,
                            ) }}
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <hr>
    {{-- end blogs --}}

    {{-- start brand  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3 d-flex justify-content-center">
                <img src="images/br1.jpg" alt="">
                <img src="images/br2.jpg" alt="">
                <img src="images/br3.jpg" alt="">
                <img src="images/br4.jpg" alt="">
                <img src="images/br1.jpg" alt="">
                <img src="images/br2.jpg" alt="">
            </div>
        </div>
    </div>
    <hr>
@endsection
