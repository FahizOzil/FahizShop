<div class="card text-white my-2" {{ $attributes }}>
    <img class="card-img-top" src="uploads/{{$url }}" width="100%" alt="Title" />
    <div class="card-body">
        <h6 class="card-title text-dark" style="font-family:Roboto,sans-serif;"> {{ $title }} </h6>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: #ff4308;font-size:15px"></i>
        <i class="fas fa-star" style="color: hsl(14, 100%, 52%);font-size:15px"></i>
        <p class="card-text text-dark"> {{ "Rs:" . $price  }} </p>
    </div>
    
    <div class="card-hover position-absolute">
       <a href="{{ route("product-detail",$id) }}"> <button id="viewproduct" data-pid="{{$id}}" class="btn px-4 my-1"> <i class="fas fa-eye"></i> Quick view</button></a>
        <button class="btn px-4" data-cart_id="{{$id}"> <i class="fas fa-cart-shopping"></i> Add To cart </button>
    </div>
    <div class="heart-hover position-absolute">
        <i class="fas fa-heart"></i>
    </div>
</div>
