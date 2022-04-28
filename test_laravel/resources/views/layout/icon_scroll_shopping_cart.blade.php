<a href="{{route('index.showcart')}}">
    <div class="d-flex align-items-center justify-content-center" id="iconcart">
        <i class="fas fa-shopping-cart"></i>
        <span class="quantity d-flex align-items-center justify-content-center quantity-shopping-cart">
            @php
                use Illuminate\Support\Facades\Session;
                if (Session::has('quantity')){
                    echo Session::get('quantity');
                }else{
                    echo 0;
                }
            @endphp
        </span>
    </div>
</a>

<a href="#top">
    <div id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>
</a>
