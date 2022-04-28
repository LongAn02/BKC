@extends('index')
@section('title','Trang giỏ hàng')
@section('main_content')
    <h1 class="d-flex justify-content-center mt-5 mb-5">Giỏ hàng của bạn</h1>
    <div class="container" id="ajax_cart">
        @include('layout.banner.ajax_cart_show')
    </div>
    <div class="container d-flex justify-content-end">
        <a href="{{route('index')}}">
            <button class="btn btn-primary">
                Trang chủ
            </button>
        </a>
    </div>
@endsection

@section('script_delete_product')
    <script>
        $(function (){
            $(".delete_shopping_cart").click(function (){
                var session_id_delete = $(this).val();
                var _token = "{{ csrf_token() }}";

                $.ajax({
                    url : '{{route('index.delete_session')}}',
                    type : "POST",
                    data : {session_id_delete : session_id_delete , _token : _token},

                    success : function (data){
                        alert("Xóa sản phẩm thành công");
                        location.reload(true);
                        $(".quantity-shopping-cart").text(data);
                    },

                    error : function (){
                        console.log("error");
                    },
                })
            })
        })
    </script>
@endsection


