<div class="card text-white my-2" {{ $attributes }}>
    <img class="card-img-top" src="{{ $url }}" alt="Title" />
    <div class="card-body">
        <h6 class="card-title text-dark"> {{ $title }} </h6>
        @if (is_numeric($price))
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        @endif
        <p class="card-text text-dark"> {{ is_numeric($price) ? "RS.$price" : Str::substr($price, 0, 100) . "..." }} </p>
    </div>
    @if (is_numeric($price))
    <div class="card-hover position-absolute">
        <button class="btn px-4 my-1"> <i class="fas fa-eye"></i> Quick view</button>
        <button class="btn px-4"> <i class="fas fa-cart-shopping"></i> Quick view</button>
    </div>
    <div class="heart-hover position-absolute">
        <i class="fas fa-heart"></i>
    </div>
    @else
    <div class="position-absolute bg-warning" style="left:1px;top:1px;height:25px">
      <p class="px-4"><b>2020-8-14 </b></p>
    </div>
    @endif
</div>
