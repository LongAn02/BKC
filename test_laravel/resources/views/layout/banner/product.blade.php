<!-- start latest product -->
<div class="container w-container-fuild mt-top">
    <div class="div-title">
        <div class="btn title-latest-product d-flex align-items-center justify-content-center">ĐỒ CỔ</div>
        <hr>
    </div>
    <div class="mt-5">
        <div class="row d-flex justify-content-around ms-4">
            @foreach($products as $product)
                <div class="col-md-4 col-sm-6 product-flex mt-5">
                    <div class="card">
                        <img src="{{asset('assets/img/product/'.$product->image->name_image.'.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->information}}</p>
                            <p class="price">{{number_format($product->price).' vnđ'}}</p>
                            <div class="d-flex justify-content-around">
                                <a href="#" class="btn btn-primary">Xem sản phẩm</a>
                                <form>
                                    @csrf
                                    <input type="hidden" value="{{$product->name}}" class="product_id_{{$product->id}}">
                                    <input type="hidden" value="{{$product->price}}" class="product_price_{{$product->id}}">
                                    <input type="hidden" value="{{$product->image->name_image}}" class="product_image_{{$product->id}}">
                                    <button  type="button" class="btn btn-warning shopping-cart" value="{{$product->id}}"><i class="fas fa-shopping-cart"></i>+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="pagination_home d-flex justify-content-end mt-5 me-5">
                {!! $products->render() !!}
            </div>
        </div>
    </div>
</div>

@section('script_product')
    <script>
        $(function (){
            $(".shopping-cart").click(function (){
                var id = $(this).val();
                var cart_name = $(".product_id_" + id).val();
                var cart_price = $(".product_price_" + id).val();
                var cart_image = $(".product_image_" + id).val();
                var _token = $('input[name = "_token"]').val();

                $.ajax({
                    url : '{{route('index.session')}}',
                    type : "POST", // Phương thức gửi
                    data : {id : id , cart_name : cart_name , cart_price : cart_price , cart_image : cart_image , _token : _token},

                    success : function (data){
                        alert("Thêm thành công vào giỏ hàng");
                        $(".quantity-shopping-cart").text(data);
                    },

                    error : function (){
                        console.log("error");
                    }
                })
            })
        })
    </script>
@endsection
<!-- end latest product -->
