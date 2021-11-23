  


{{-- <div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            @foreach($product  as $products )
            <div class="productinfo text-center">
                <img src="{{asset('assets/images/shop/product11.jpg')}}" alt="" />
                {{-- <h2>{{$products->regular_price}}</h2> --}}
                <p>{{$products->name}}</p>
                <a href="{{route('product.detail',['slug'=>$products->slug])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>$56</h2>
                    <p>Easy Polo Black Edition</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
            @endforeach
        </div>
    </div>
{{-- </div> --}}