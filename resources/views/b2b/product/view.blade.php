@extends("layouts.app")
@section("title","Products")
@section("styles")
<style>
    .product-grid {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        border-radius: 15px;
        border: 1px solid #fff;
        background: #fff;
        overflow: hidden;
        transition: all 0.4s ease-out;
    }
    .product-grid:hover {
        box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.1);
    }
    .product-grid .product-image {
        position: relative;
    }
    .product-grid .product-image a.image {
        display: block;
    }
    .product-grid .product-image img {
        width: 100%;
        height: 270px;
        object-fit: cover;
    }
    .product-grid .product-discount-label {
        color: #fff;
        background: #3a57e8;
        font-size: 14px;
        font-weight: 400;
        text-transform: uppercase;
        padding: 2px 8px;
        border-radius: 5px;
        position: absolute;
        top: 12px;
        left: 12px;
    }
    .product-grid .product-links {
        width: 145px;
        padding: 0;
        margin: 0;
        list-style: none;
        opacity: 0;
        transform: translateX(-50%) translateY(-50%);
        position: absolute;
        top: 65%;
        left: 50%;
        transition: all 0.4s ease 0s;
    }
    .product-grid:hover .product-links {
        opacity: 1;
        top: 50%;
    }
    .product-grid .product-links li {
        display: inline-block;
        margin: 0 2px;
    }
    .product-grid .product-links li a {
        color: #2c2c2c;
        background: #fff;
        font-size: 16px;
        line-height: 42px;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        display: block;
        position: relative;
        transition: all 0.4s ease-out 0s;
    }
    .product-grid .product-links li a:hover {
        color: #fff;
        background: #3a57e8;
        box-shadow: 1px 1px 30px 0 rgba(0, 0, 0, 0.2);
    }
    .product-grid .product-links li a:before,
    .product-grid .product-links li a:after {
        content: attr(data-tip);
        color: #fff;
        background-color: #555;
        font-size: 12px;
        line-height: 18px;
        padding: 5px 10px;
        white-space: nowrap;
        display: none;
        transform: translateX(-50%);
        position: absolute;
        left: 50%;
        top: -40px;
        transition: all 0.3s ease 0s;
    }
    .product-grid .product-links li a:after {
        content: '';
        height: 10px;
        width: 10px;
        padding: 0;
        transform: translateX(-50%) rotate(45deg);
        top: -18px;
        z-index: -1;
    }
    .product-grid .product-links li a:hover:before,
    .product-grid .product-links li a:hover:after {
        display: block;
    }
    .product-grid .product-content {
        padding: 12px 12px 15px;
        position: relative;
    }
    .product-grid .rating {
        padding: 0;
        margin: 0 0 8px;
        list-style: none;
    }
    .product-grid .rating li {
        color: #3a57e8;
        font-size: 14px;
    }
    .product-grid .rating .far {
        color: #808080;
    }
    .product-grid .title {
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        margin: 0 0 15px;
    }
    .product-grid .title a {
        color: #2c2c2c;
        transition: all 0.3s ease 0s;
    }
    .product-grid .title a:hover {
        color: #3a57e8;
    }
    .product-grid .price {
        color: #3a57e8;
        font-size: 17px;
        font-weight: 600;
        display: block;
        transition: all 0.4s ease-in-out;
    }
    .product-grid .price span {
        color: #999;
        font-weight: 500;
        text-decoration: line-through;
    }
    .product-grid:hover .price {
        opacity: 0;
    }
    .product-grid .add-to-cart {
        color: #fff;
        background-color: #3a57e8;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        line-height: 40px;
        width: 140px;
        height: 40px;
        border-radius: 50px;
        opacity: 0;
        transform: translateX(-50%);
        position: absolute;
        bottom: 50px;
        left: 50%;
        transition: all .4s ease-out;
    }
    .product-grid .add-to-cart:hover {
        background-color: #2f2f2f;
    }
    .product-grid:hover .add-to-cart {
        opacity: 1;
        bottom: 8px;
    }
    @media screen and (max-width:1200px) {
        .product-grid {
            margin: 0 0 30px;
        }
    }
</style>
@endsection
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="{{route('product.detail',$product->link)}}" class="image">
                            <img class="pic-1" src="{{asset('uploads/products/'. $product->image)}}">
                        </a>
                        @if($product->stock < 1)
                        <span class="product-discount-label">Out Of Stock</span>
                        @endif
                        <ul class="product-links">
                            <li><a href="{{route('product.detail',$product->link)}}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="{{route('product.detail',$product->link)}}">{{$product->title}}</a></h3>
                        <div class="price">₹{{$product->price}}</div>
                        <a class="add-to-cart" href="javascript:void(0)" data-id="{{$product->id}}" data-user-id="{{Auth::id()}}">add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(".add-to-cart").on("click",function(){
        var product_id = $(this).attr("data-id");
        var user_id = $(this).attr("data-user-id");
        var Button = $(this);
        Button.html('<i class="fa fa-spin fa-spinner"></i> Loading...')
        $.ajax({
            url:"{{route('add-to-cart')}}",
            type:"POST",
            data:{product_id:product_id,user_id:user_id},
            dataType:"JSON",
            success: function(res){
                setTimeout(() => {
                    Button.html(res["btn"]);
                    toastr[res["res"]](res["msg"]+"<br/><a class='btn btn-outline-info  btn-sm ' href='{{route('cart.index')}}'>Go To Cart</a>");
                }, 1000);
            }
        })
    });
</script>
@endsection