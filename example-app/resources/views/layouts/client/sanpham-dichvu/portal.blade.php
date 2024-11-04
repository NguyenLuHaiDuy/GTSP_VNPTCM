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
        background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/portal.png');
        padding: 50px;
        height: 400px;
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
        max-width: 100%;
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
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logoportal.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
                <h3>Cổng thông tin điện tử là gì?</h3>
                <p> Là điểm truy cập tập trung và duy nhất. Tích hợp các kênh thông tin, dịch vụ hành chính công và các ứng dụng.</p>
               
                <h3>Cổng thông tin điện tử được phát triển như thế nào?</h3>
                <p>Là một sản phẩm hệ thống phần mềm được phát triển trên một sản phẩm phần mềm cổng lõi (portal core)</p>
                <h3>Cổng thông tin điện tử hoạt động như thế nào?</h3>
                <p>Thực hiện trao đổi thông tin, dữ liệu với các hệ thống thông tin, đồng thời thực hiện cung cấp và trao đổi với người sử dụng thông qua một phương thức thống nhất trên nền tảng Web tại bất kỳ thời điểm nào và từ bất kỳ đâu.</p>
                <h3>Mô hình cổng TTĐT</h3>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/CTTDT_9112017638441242055736046.png" alt="Khung chính phủ điện tử">
            </div>
            </p>
            <h3>Module chức năng của Cổng TTĐT</h3>
           <ul>
            <li class="part-list">Quản lý tin tức</li>
            <li class="part-list">Quản lý người dùng, phân quyềnn</li>
            <li class="part-list">Quản lý quy trình xuất bản tin</li>
            <li class="part-list">Quản lý văn bản</li>
            <li class="part-list">Quản lý giao lưu trực tuyến</li>
            <li class="part-list">Quản lý ảnh/video</li>
            <li class="part-list">Quản lý danh bạ</li>
            <li class="part-list">Quản lý góp ý dự thảo văn bản</li>
            <li class="part-list">Quản lý cung câp thông tin dịch vụ công</li>
            <li class="part-list">Quản lý hỏi đáp, góp ý trực tuyên</li>
            <li class="part-list">Quản lý hệ thống báo cáo</li>
           </ul>
           <h3>Chức năng cổng lõi</h3>
           <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/ChucNang638441242157838002.png" alt="Khung chính phủ điện tử">
            </div>

        </section>
    </div>
</body>

</html>
@endsection