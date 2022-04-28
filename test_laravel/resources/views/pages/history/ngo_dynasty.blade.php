@extends('index')

@section('title','Triều Đại Nhà Ngô')

@section('main_content')
    <div class="container font-history">
        <h1 class="d-flex justify-content-center mt-5"><i class="fas fa-flower me-5"></i>Nhà Ngô<i
                class="fas fa-flower ms-5"></i></h1>
        <div class="d-flex justify-content-center mt-4">
            <p class="container-history">
                Nhà Ngô (chữ Nôm: 茹吳, chữ Hán: 吳朝, Hán Việt: Ngô triều) là một triều đại quân chủ trong lịch sử Việt
                Nam, truyền được hai đời nhưng có tới ba vị vua, kéo dài từ năm 939 đến năm 965. Khoảng thời gian xen
                giữa từ 944 đến 950 còn có Dương Bình Vương tức Dương Tam Kha. Khác với các triều đại quân chủ Việt Nam
                sau này, các vua nhà Ngô vẫn xưng tước vương mà chưa xưng đế hiệu trên phạm vi toàn lãnh thổ do họ cai
                trị. <br>
                <b>Triều vua Ngô Quyền</b> <br>
                Bài chi tiết: Ngô Quyền và Trận Bạch Đằng, 938
                Năm 938, Ngô Quyền tập hợp lực lượng từ Ái Châu ra đánh Kiều Công Tiễn. Công Tiễn sai sứ sang cầu cứu
                Nam Hán. Vua Nam Hán là Lưu Nghiễm phong cho con là Vạn vương Hoằng Tháo (hoặc Hồng Tháo)[4] làm Giao
                vương, rồi sai Tháo đem quân sang cứu. Nghiễm tự mình đóng quân ở Hải Môn làm thanh viện. Ngô Quyền hạ
                thành Đại La, giết Công Tiễn rồi bày trận trên sông Bạch Đằng đón quân Nam Hán.
                <br>
                Tranh ghép đá mô phỏng trận Bạch Đằng 938
                Tháng 11 năm 938, thủy quân của Hoằng Tháo bị Ngô Quyền đánh tan trong trận Bạch Đằng. Hoằng Tháo bị
                giết chết, Lưu Nghiễm thu thập tàn binh quay về.
                <br>
                Năm 939, Ngô Quyền lên ngôi, tức là Tiền Ngô Vương, đóng đô ở Cổ Loa, lập Dương thị làm vương hậu; đặt
                trăm quan, chế định triều nghi phẩm phục.
                <br>
                Các bộ chính sử của Việt Nam như Đại Việt sử ký toàn thư, Khâm định Việt sử Thông giám cương mục,... đều
                không chép rõ việc trị nước của Ngô Quyền.
            </p>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{route('history.tran_dynasty')}}">
                    <button class="btn btn-primary"><i class="fas fa-angle-double-left me-3"></i>Nhà Trần</button>
                </a>
            </div>
            <div>
                <a href="{{route('history.dinh_dynasty')}}">
                    <button class="btn btn-primary">Nhà Đinh<i class="fas fa-angle-double-right ms-3"></i></button>
                </a>
            </div>
        </div>
    </div>
@endsection
