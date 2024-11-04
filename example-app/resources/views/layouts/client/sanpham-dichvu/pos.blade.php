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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/post.png');
            padding: 40px;
            height: 500px;
            color: white !important;
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
        .part-list {
            color:black;
            list-style-type: none;
        }
    </style>

    <div class="container">
        <section class="hero-section">
            <div class="content">
                <h1>VNPT POS</h1>
                <p>Phần mềm quản lý
                    cửa hàng bán lẻ</p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logopost.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <p>Được phát triển dành cho cửa hàng, chuỗi cửa hàng thời trang, café, siêu thị mini… Tập trung vào tính tiện lợi, linh hoạt, người dùng có thể quản lý từ bất cứ đâu, trên bất cứ thiết bị nào có kết nối Internet. VNPT POS thực sự phù hợp cho những chủ cửa hàng năng động, muốn có giải pháp quản lý chuyên nghiệp cho cửa hàng.

                VNPT POS cung cấp các chức năng quản lý một hoặc chuỗi các cửa hàng theo quy trình khép kín: từ quản lý danh mục cửa hàng, hàng hóa, việc lập đơn hàng tới nhà cung cấp, nhập kho và xuất kho hàng hóa đến việc bán hàng cho khách hàng. Được triển khai theo mô hình Điện toán đám mây, VNPT POS đã và đang mang lại rất nhiều lợi ích thiết thực cho người dùng:</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/bEa-yCAnx3A?si=xvU2Aq2UHwY_trio" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <ul>
                    <li class="part-list">Truy cập hệ thống quản lý mọi lúc, mọi nơi chỉ cần thiết bị có kết nối Internet. </li>
                    <li class="part-list">Quản lý chặt chẽ lượng hàng hóa từ nhà cung cấp tới cửa hàng và tới Khách hàng tiêu dùng. </li>
                    <li class="part-list">Quản lý chi tiết: giá bán, giá nhập, thời gian tồn kho,...giúp dễ dàng tìm kiếm khi bán hàng, tiết kiệm thời gian và công sức khi kiểm kê hàng hóa.</li>
                    <li class="part-list">Giúp chủ cửa hàng tối ưu được các hoạt động quản lý với hệ thống tra cứu và báo cáo theo nhiều tiêu chí khác nhau.</li>
                    <li class="part-list">Mở rộng quy mô kinh doanh nhanh chóng với số lượng cửa hàng không hạn chế.</li>
                    <li class="part-list">Giá thành rẻ vì không phải đầu tư cơ sở hạ tầng ban đầu để cài đặt hệ thống phần mềm.</li>
                <h3>Hotline: 18001001 - nhánh số 1</h3>
                </ul>
            </section>
    </div>
</body>

</html>


@endsection