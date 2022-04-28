@extends('index')

@section('title','Triều Đại Nhà Hồ')

@section('main_content')
    <div class="container font-history">
        <h1 class="d-flex justify-content-center mt-5"><i class="fas fa-flower me-5"></i>Nhà Hồ<i
                class="fas fa-flower ms-5"></i></h1>
        <div class="d-flex justify-content-center mt-4">
            <p class="container-history">
                Nhà Hồ (chữ Nôm: 茹胡, chữ Hán: 胡朝, Hán Việt: Hồ triều) là một triều đại quân chủ trong lịch sử Việt Nam,
                bắt đầu khi Hồ Quý Ly lên ngôi năm 1400 sau khi giành được quyền lực từ tay nhà Trần và chấm dứt khi Hồ
                Hán Thương bị quân Minh bắt vào năm 1407 – tổng cộng là 7 năm. Quốc hiệu Đại Việt đã đổi thành Đại Ngu
                năm 1400.<br>
                <b>Thành lập</b> <br>
                Nhà Hồ do Hồ Quý Ly, một đại quý tộc và đại thần nhà Trần thành lập. Từ năm 1371, Hồ Quý Ly, khi đó mang
                họ Lê, được tham gia triều chính nhà Trần, được vua Trần Dụ Tông cho làm Trưởng cục Chi hậu. Sau, vua
                Trần Nghệ Tông đưa ông lên làm Khu mật đại sứ, lại gả em gái là công chúa Huy Ninh.

                Sau biến cố Dương Nhật Lễ, cái chết của Trần Duệ Tông và sự cướp phá của Chiêm Thành, nhà Trần ngày càng
                suy sụp. Thời hậu kỳ nhà Trần, mọi việc chính sự do Thượng hoàng Trần Nghệ Tông quyết định. Trần Nghệ
                Tông lại rất trọng dụng Hồ Quý Ly nên khi về già thường ủy thác mọi việc cho Quý Ly quyết định. Dần dần
                binh quyền của Quý Ly ngày một lớn, Nghệ Tông tuổi cao sức yếu cũng không kìm chế nổi.

                Năm 1394 Trần Nghệ Tông mất, Hồ Quý Ly được phong làm Phụ chính Thái sư nhiếp chính, tước Trung tuyên Vệ
                quốc Đại vương, nắm trọn quyền hành trong nước.

                Sau khi vua Trần dời đô từ Thăng Long vào Thanh Hóa và giết hàng loạt quần thần trung thành với nhà
                Trần, tháng 2 năm Canh Thìn 1400, Hồ Quý Ly truất ngôi của cháu ngoại là Trần Thiếu Đế, tự lên làm vua
                lấy quốc hiệu là Đại Ngu, lập nên nhà Hồ.
            </p>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{route('history.ly_dynasty')}}">
                    <button class="btn btn-primary"><i class="fas fa-angle-double-left me-3"></i>Nhà Lý</button>
                </a>
            </div>
            <div>
                <a href="{{route('history.tran_dynasty')}}">
                    <button class="btn btn-primary">Nhà Trần<i class="fas fa-angle-double-right ms-3"></i></button>
                </a>
            </div>
        </div>
    </div>
@endsection
