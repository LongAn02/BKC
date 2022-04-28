<div class="container-fuild bg-color-ctnf">
    <div class="container w-container-fuild">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mt-3">
                    <marquee behavior="alternate" direction="" Scrollamount="2"><i class="fas fa-truck text-light"></i>Chào mừng bạn đến với shop đồ cổ của BTEC-D02K12</marquee>
                </div>
            </div>
            <div class="col-md-6  d-flex justify-content-end" id="menu-icon">
                <ul class="mt-3">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="li-shopping-cart">
                        <a href="{{route('index.showcart')}}">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="d-flex align-items-center justify-content-center quantity-header quantity-shopping-cart">
                                @php
                                    use Illuminate\Support\Facades\Session;
                                    if (Session::has('quantity')){
                                        echo Session::get('quantity');
                                    }else{
                                        echo 0;
                                    }
                                @endphp
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
