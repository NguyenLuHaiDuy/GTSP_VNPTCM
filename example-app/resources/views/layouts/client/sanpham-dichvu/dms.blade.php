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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/dms.png');
            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            padding: 50px;
            height: 400px;
            width: 100%;

            color: white;
        }


        .hero-section.content {
            flex: 1;
            max-width: 600px;

            width: 100%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 15px;
            line-height: 1.6;
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
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
        .part-list{
            color:black;
            list-style-type: none;
        }
    </style>

    <div class="container">
        <section class="hero-section">
            <div class="content">
                <h1>VNPT CCVC</h1>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 20px; color: white;">Phần mềm quản lý kênh phân phối, </span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 20px; color: white;">Quản lý trực tuyến các Đại lý, </span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 20px; color: white;">Nhân viên kinh doanh, Hàng hóa… </span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 20px; color: white;">trên toàn bộ hệ thống phân phối </span></p>

                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>

        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <b><span style="padding: 0; border: 1pt none rgba(0, 0, 0, 1); font-size: 18px">VNPT DMS<span style="font-size: 16px">&nbsp;</span></span></b>
            <span style="font-size: 16px">(VNPT Distribution Management System)&nbsp;là hệ thống quản lý kênh&nbsp;phân phối và bán hàng trực tuyến giúp cho các Doanh nghiệp quản lý: các Nhà phân phối, các Điểm bán lẻ, đội ngũ Nhân viên kinh doanh, Cửa hàng, Chuỗi cửa hàng trực thuộc... với chi phí thấp nhất dựa trên mô hình điện toán đám mây.</span>
            <h3>Điểm khác biệt của VNPT DMS:</h3>
            <ul>
                <li class="part-list">Sử dụng ngay lập tức chỉ cần thiết bị có kết nối Internet. </li>
                <li class="part-list">Các giao dịch được quản lý trực tuyến từ PC, Tablet, Smartphone. </li>
                <li class="part-list">Dễ dàng cho người dùng mới tiếp cận (chỉ cần biết sử dụng trình duyệt internet). </li>
                <li class="part-list">Phù hợp với các doanh nghiệp từ nhỏ đến lớn. Dễ dàng khai báo, nâng cấp khi mở rộng quy mô quản lý. </li>
                <li class="part-list">Chi phí tối ưu vì chỉ phải trả theo nhu cầu sử dụng.</li>
                <h3> Hotline: 18001001 - nhánh số 1</h3>
            </ul>
            <iframe width="600" height="315" src="https://www.youtube.com/embed/3m3yVHI1afw?si=Bl3M7yzQOr5tqTWp" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </section>
    </div>
</body>

</html>
@endsection