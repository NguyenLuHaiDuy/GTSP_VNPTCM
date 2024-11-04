@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống một cửa liên thông</title>

</head>

<body>
<style>
    .container {
        padding: 20px;
    }

    .hero-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #78d3ff;
        padding: 50px;
        height: 350px;
        color: white;
    }

    .content {
        flex: 1;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    p {
        font-size: 1.2rem;
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .buttons {
        display: flex;
        gap: 10px;
    }

    .btn {
        text-decoration: none;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
    }

    .btn-try {
        background-color: #f5a623;
        /* Màu vàng cam cho nút "Dùng thử" */
    }

    .btn-price {
        background-color: #4caf50;
        /* Màu xanh cho nút "Bảng giá" */
    }

    .image {
        flex: 1;
        text-align: right;
    }

    .image img {
        max-width: 50%;
        height: auto;
    }

    .description-section,
    .diagram-section {
        margin-bottom: 40px;
    }

    .description-section p,
    .diagram-section p {
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
    }

    ul {
        list-style-type: disc;
        margin-left: 20px; /* Increased margin for better indentation */
        color: #333;
        margin-bottom: 15px; /* Add bottom margin to space out list items */
    }

    ul li {
        margin-bottom: 10px; /* Adding space between list items */
    }

    p {
        margin-top: 20px; /* Adding space above paragraphs for better readability */
    }

    .diagram-section .diagram {
        text-align: center;
        margin-bottom: 20px;
    }

    .diagram-section .diagram img {
        max-width: 100%;
        height: auto;
    }

    .diagram-section p {
        font-size: 1rem;
    }
    .part-list{
        color: black;
        list-style-type: none;
    }
</style>

    <div class="container">


        <section class="hero-section">
            <div class="content">
                <h1>HỆ THỐNG VĂN BẢN ĐIỀU HÀNH</h1>
                <p>Hệ thống quản lý văn bản và điều hành công việc điện tử giúp các cơ quan nhà nước thực hiện hóa các mục tiêu xây dựng một văn phòng điện tử không giấy tờ</p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/san%20pham/article%20(20).png" alt="Hệ thống một cửa liên thông">
            </div>
        </section>
        <section class="description-section">
            <h2>Giới thiệu</h2>
            <p>
                Hệ thống quản lý văn bản và điều hành là hệ thống quản lý văn bản và điều hành công việc điện tử giúp các cơ quan nhà nước thực hiện hóa các mục tiêu xây dựng một văn phòng điện tử không giấy tờ.

                Hệ thống quản lý văn bản và điều hành được xây dựng gồm 02 phiên bản phục vụ quản lý văn bản khác nhau: Văn bản mật và Văn bản thường.

                Phiên bản Quản lý văn bản mật: là một hệ thống quản lý văn bản và điều hành công việc điện tử, nhưng dùng riêng cho việc quản lý các loại văn bản được đánh dấu là MẬT, được xây dựng đảm bảo các tiêu chí an toàn bảo mật theo quy định.
                <br><br>
                <strong>ĐIỂM NỔI BẬT</strong>
            <ul class="part-list">
                <li class="part-item">Tích hợp với máy Scan để quét văn bản giấy</li>
                <li  class="part-list">Chỉnh sửa văn bản online (File word, excel, text)</li>
                <li  class="part-list">Tìm kiếm nhanh, Tìm kiếm trong nội dung văn bản (Fulltext search)</li>
                <li  class="part-list">Hạn chế thao tác người dùng, xem nhanh thông tin</li>
                <li  class="part-list">Cho phép cấu hình đa quy trình, phân công, phân quyền sử dụng đến từng cá nhân một cách khoa học, hợp lý; cho phép thiết lập người sử dụng với nhiều vai trò khác nhau</li>
                <li  class="part-list">Các chức năng phong phú, đơn giản, dễ sử dụng. Tích hợp chức năng điều hành, quản lý lịch họp và lịch công tác</li>
            </ul>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/so-do-van-ban-DH_edit_09112017638427647682877769.png" alt="Khung chính phủ điện tử">
            </div>
            </p>
            <h3>Lợi ích của khách hàng</h3>
           <ul>
            <li class="part-list"> Phân phối văn bản đơn giản, không phải photo, in ấn, đi lại nhiều lần</li>
            <li class="part-list">Dễ dàng quản lý, tra cứu thông tin</li>
            <li class="part-list">Tìm kiếm bản gốc nhanh chóng</li>
            <li class="part-list">Truyền đạt các thông báo, chỉ thị của lãnh đạo đến các bộ phận nhanh chóng, kịp thời</li>
            <li class="part-list">Dễ dàng quản lý, tra cứu, tìm kiếm văn bản liên quan đến công việc đang xử lý</li>
            <li class="part-list">Nắm bắt nhanh chóng các công việc được giao</li>
            <li class="part-list">Báo cáo công việc kịp thời</li>
            <li class="part-list">Tạo môi trường trao đổi, thảo luận, nâng cao hiệu quả công việc</li>
            <li class="part-list">Dễ dàng sắp xếp lịch công việc cá nhân.</li>
            <li class="part-list">Điều hành và quản lý mọi lúc, mọi nơi</li>
            <li class="part-list">Quản lý các công việc rõ ràng, minh bạch</li>
            <li class="part-list">Nắm bắt đầy đủ thông tin, đưa ra quyết định chính xác</li>
            <li class="part-list">Tạo môi trường làm việc dân chủ, trao đổi công khai</li>
            <li class="part-list">Tra cứu, điều hành văn bản trên Smartphone, Tablet</li>
            <li class="part-list">Quản lý thông tin nội bộ hiệu quả</li>
            <li class="part-list">Trao đổi dữ liệu và chia sẻ thông tin dễ dàng</li>
            <li class="part-list">Tiết kiệm thời gian, nhân lực, chi phí cho việc in ấn, photo, đi lại gửi văn bản thủ công</li>
            <li class="part-list">Tăng cường làm việc cộng tác giữa các cá nhân, bộ phận</li>
           </ul>
           <h3>Danh sách tính năng phần mềm</h3>
           <ul>
            <p>❖ Quản trị hệ thống</p>
            <li class="part-list">Quản lý thông tin người dùng</li>
            <li class="part-list"> Quản lý nhóm quyền</li>
            <li class="part-list">Quản lý cấu hình hệ thống</li>
            <li class="part-list">Quản lý lịch sử tác động hệ thống</li>
            <li class="part-list">Đổi mật khẩu</li>

            <p>❖ Quản lý danh mục</p>
            <li class="part-list">Danh mục sổ văn bản đến</li>
            <li class="part-list"> Danh mục sổ văn bản đi</li>
            <li class="part-list">Danh mục loại văn bản</li>
            <li class="part-list">Danh mục lĩnh vực loại văn bản</li>
            <li class="part-list">Danh mục độ mật</li>
            <li class="part-list">Danh mục độ khẩn</li>
            <li class="part-list">Danh mục chức vụ</li>
            <p>❖ Quản lý văn bản đến</p>
            <li class="part-list">Quản lý văn bản đến</li>
            <li class="part-list">Văn bản đến chưa xử lý</li>
            <li class="part-list">Văn bản đến quá hạn xử lý</li>
            <p>❖ Quản lý văn bản đi</p>
            <li class="part-list">Quản lý văn bản đi</li>
            <li class="part-list">Văn bản đi chờ xử lý</li>
            <p>❖ Tra cứu văn bản</p>
            <li class="part-list">Tra cứu thông tin văn bản đến</li>
            <li class="part-list">Tra cứu thông tin văn bản đi</li>
            <p>❖ Báo cáo thống kê</p>
            <li class="part-list">Báo cáo tổng hợp tình hình giải quyết văn bản đến</li>
            <li class="part-list">Báo cáo tổng hợp tình hình giải quyết văn bản đến cá nhân</li>
            <li class="part-list">Báo cáo chi tiết tình hình giải quyết văn bản đến</li>
            <p>❖ In số</p>
            Cho phép in các sổ theo Thông tư số 24/2020/TT – BCA và Nghị định 30/2020/NĐ – CP
            <li class="part-list">In sổ quản lý sao, chụp bí mật nhà nước</li>
            <li class="part-list">In sổ đăng ký bí mật nhà nước đi</li>
            <li class="part-list">In sổ đăng ký bí mật nhà nước đến</li>
            <li class="part-list">In sổ chuyển giao bí mật nhà nước</li>
            <li class="part-list">In sổ đăng ký văn bản đi</li>
            <li class="part-list">In sổ gửi văn bản đi bưu điện</li>
            <li class="part-list">In bì văn bản</li>
            <li class="part-list">In sổ đăng ký văn bản đến</li>
            <li class="part-list">In sổ theo dõi giải quyết văn bản đến</li>
           </ul>

        </section>
    </div>
</body>

</html>
@endsection