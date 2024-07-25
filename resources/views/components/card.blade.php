<div class="card text-white my-2" {{ $attributes }}>
    <img class="card-img-top" src="{{$url }}" alt="Title" />
    <div class="card-body">
        <h6 class="card-title text-dark"> {{ $title }} </h6>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <p class="card-text text-dark"> {{ is_numeric($price) ? "RS.$price" : Str::substr($price, 0, 100) }} </p>
    </div>
    
    <div class="card-hover position-absolute">
        <button id="viewproduct" data-pid="{{$id}}" class="btn px-4 my-1"> <i class="fas fa-eye"></i> Quick view</button>
        <button class="btn px-4"> <i class="fas fa-cart-shopping"></i> Quick view</button>
    </div>
    <div class="heart-hover position-absolute">
        <i class="fas fa-heart"></i>
    </div>
</div>
