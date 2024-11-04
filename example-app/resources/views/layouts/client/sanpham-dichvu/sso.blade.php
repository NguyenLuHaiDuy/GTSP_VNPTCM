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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/san pham/article (23).png');
            padding: 50px;
            height: 400px;
            color: #0066b3;
        }

        .content {
            flex: 1;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        h3{
            font-size: 1.3rem;
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
            margin-left: 20px;
            /* Increased margin for better indentation */
            color: #333;
            margin-bottom: 15px;
            /* Add bottom margin to space out list items */
        }

        ul li {
            margin-bottom: 10px;
            /* Adding space between list items */
        }

        p {
            margin-top: 20px;
            /* Adding space above paragraphs for better readability */
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
        .part-list {
            color:black;
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
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/san%20pham/article%20(22).png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <p>Mỗi tổ chức thường có nhiều hệ thống, nhiều domain và ứng dụng khác nhau dẫn đến việc kiểm soát tài khoản và mật khẩu của người dùng sẽ gặp nhiều khó khăn và vướng mắc, mỗi một ứng dụng người dùng sẽ phải nhớ một bộ tài khoản và mật khẩu riêng gây ra nhiều phiền toái và sự bất tiện cho người dùng. </p>
            <p>Dịch vụ VNPT SSO là giải pháp tích hợp các hệ thống ứng dụng khác nhau của khách hàng lại để: </p>
            <ul>
                <li class="part-list">Người dùng chỉ cần xác thực một lần để có thể vào được tất cả các hệ thống.</li>
                <li class="part-list">Quản trị quản lý người dùng của tất cả các phần mềm một cách tập trung.</li>
                <li class="part-list">Bảo mật thông tin truy cập với xác thực 2 lớp và các chuẩn công nghệ mới nhất.</li>
            </ul>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/SSO_09112017638427654496715985.png" alt="Khung chính phủ điện tử">
            </div>
            </p>
            <h3>VNPT SSO là giải pháp toàn diện về tiện ích, bảo mật và quản lý thông tin người dung tập trung dành cho tổ chức, doanh nghiệp.</h3>
            <h3>Lợi ích</h3>
            <p>Tập trung hóa các tài khoản trên các ứng dụng đơn lẻ, người quản trị và người dùng sẽ chỉ cần truy cập 1 lần và vào 1 phần mềm để thực hiện các chức quản lý thông tin tài khoản.Đem đến cho người dùng một tính năng vô cùng hữu dụng, đó là chỉ cần đăng nhập một lần (Single Sign On) là có thể khai thác toàn bộ các ứng dụng bên trong, giải quyết triệt để bài toán quản lý quá nhiều tài khoản của người dùng. Tăng cường khả năng bảo mật với hai cơ chế bảo mật đồng thời: đăng nhập bằng mật khẩu thông thường (có mã hóa dữ liệu trên đường truyền SSL) và cơ chế mật khẩu một lần (OTP), nghĩa là mật khẩu được sinh ra tại thời điểm người dùng login vào hệ thống thông qua SMS.Người dùng có thể mềm dẻo trong lựa chọn đăng nhập với khả năng tùy chọn tắt mở OTP.</p>

        </section>
    </div>
</body>

</html>


@endsection