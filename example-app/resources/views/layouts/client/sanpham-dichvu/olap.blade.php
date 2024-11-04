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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/olap.png');
            padding: 40px;
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

        h3 {
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
            display: block;
            margin: 0 auto;
            /* Căn giữa hình ảnh */
        }

        .diagram-section p {
            font-size: 1rem;
        }
        .part-list{
            color : black;
            list-style-type: none;
        }
    </style>

    <div class="container">
        <section class="hero-section">
            <div class="content">
                <h1>OLAP</h1>
                <p>Hệ thống báo cáo, tổng hợp dữ liệu động
                    Không phụ thuộc vào các hệ thống đang sử dụng,
                    Chủ động thiết lập mẫu báo cáo,
                    Tự động tổng hợp số liệu báo cáo...</p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logoolap.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <p>VNPT OLAP là hệ thống báo cáo, tổng hợp dữ liệu động cho các tổ chức/doanh nghiệp của VNPT. Hệ thống đáp ứng yêu cầu quy trình nghiệp vụ, chỉ tiêu báo cáo đa dạng của các tổ chức, doanh nghiệp khác nhau, có khả năng mở rộng số lượng báo cáo và không hạn chế số cấp và số lượng đơn vị. Dễ dàng thu thập và tự động tổng hợp số liệu báo cáo theo các cấp đơn vị từ dưới lên trên.</p>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/olap638441261454451087.png" alt="Khung chính phủ điện tử">
            </div>
            </p>
            <h3>Các Hệ thống nghiệp vụ báo cáo đã có trên hệ thống:</h3>
            <ul>
                <li class="part-list">Hệ thống báo cáo ngành tài nguyên môi trường</li>
                <li class="part-list">Hệ thống báo cáo ngành y tế</li>
                <li class="part-list">Hệ thống báo cáo thống kê-Tổng cục thống kê</li>
                <li class="part-list">Hệ thống báo cáo thông tin và truyền thông</li>
                <li class="part-list">Hệ thống báo cáo kinh tế xã hội</li>
            </ul>
            <p>Ngoài các hệ thống báo cáo đã có, hệ thống có thể đáp ứng tất cả các yêu cầu về báo cáo và phân tích số liệu của mọi tổ chức, doanh nghiệp.</p>
        </section>
    </div>
</body>

</html>
@endsection