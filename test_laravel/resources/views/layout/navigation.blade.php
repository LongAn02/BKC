<div class="container-fuild bg">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="me-menu">
                <a href="#">
                    <img src="{{asset('assets/img/logo/logo_shop.png')}}" alt="" class="w-logo-shop">
                </a>
            </div>
            <div class="container-fluid">

                <div class="me-menu-repsonsive navbar-brand">
                    <a href="">
                        <img src="{{asset('assets/img/logo/logo_shop.png')}}" alt="" class="w-logo-shop">
                    </a>
                </div>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}">BÀI ĐĂNG</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                LỊCH SỬ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('history.dinh_dynasty')}}">Nhà Đinh</a></li>
                                <li><a class="dropdown-item" href="{{route('history.ly_dynasty')}}">Nhà Lý</a></li>
                                <li><a class="dropdown-item" href="{{route('history.ho_dynasty')}}">Nhà Hồ</a></li>
                                <li><a class="dropdown-item" href="{{route('history.tran_dynasty')}}">Nhà Trần</a></li>
                                <li><a class="dropdown-item" href="{{route('history.ngo_dynasty')}}">Nhà Ngô</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index.showcart')}}">GIỎ HÀNG</a>
                        </li>

                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>

