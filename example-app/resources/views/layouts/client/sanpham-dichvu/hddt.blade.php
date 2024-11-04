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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/imghddt.png');
            padding: 40px;
            height: 450px;
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
            color:black;
            list-style-type: none;
        }
    </style>

    <div class="container">
        <section class="hero-section">
            <div class="content">
                <h1>HÓA ĐƠN ĐIỆN TỬ</h1>
                <p>DỊCH VỤ HÓA ĐƠN ĐIỆN TỬ AN TOÀN - HIỆU QUẢ</p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logohddt.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>

            <p>Từ 1/5/2011, doanh nghiệp có thể sử dụng hóa đơn điện tử theo quy định tại Thông tư số 32/2011/TT-BTC ngày 14/3/2011 của Bộ Tài chính hướng dẫn về khởi tạo, phát hành và sử dụng hóa đơn điện tử bán hàng hóa, cung ứng dịch vụ. Đây là một hình thức thanh toán mới trong giao dịch thương mại.</p>
            <h3>Hoá đơn điện tử</h3>
            <ul>
                <li class="part-list">Là tập hợp các thông điệp dữ liệu điện tử về bán hàng hóa, cung ứng dịch vụ</li>
                <li class="part-list">Được Khởi tạo, Lập, Gửi, Nhận, Lưu trữ và Quản lý bằng phương tiện điện tử</li>
                <li class="part-list">Có thể chuyển đổi thành hóa đơn giấy trong nhu cầu lưu thông hàng hóa, quản lý hóa đơn của người mua</li>
            </ul>
            <h3>Lợi ích của việc sử dụng hoá đơn điện tử:</h3>
            <ul>
                <li class="part-list">Tiết kiệm chi phí in ấn, gửi, bảo quản, lưu trữ, khai thác hóa đơn</li>
                <li class="part-list">Hạn chế các rủi ro như mất mát, rách, hỏng, cháy trong quá trình vận chuyển lưu trữ.</li>
                <li class="part-list">Rút ngắn thời gian thanh toán do việc lập, gửi, nhận hóa đơn được thực hiện qua các phương tiện điện tử</li>
                <li class="part-list">Đơn giản hóa việc sử dụng hóa đơn cho khách hàng: dễ dàng tiếp nhận, quản lý và kê khai thuế</li>
                <li class="part-list">Thuận tiện cho việc hạch toán kế toán, đối chiếu dữ liệu, quản trị kinh doanh của doanh nghiệp, kê khai, nộp thuế.</li>
                <div class="diagram">
                    <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/HDDT1638441956588342805.png" alt="Khung chính phủ điện tử">
                </div>
            </ul>
            <h3>Đối tượng sử dụng sản phẩm</h3>
            <p>Khách hàng là các đơn vị, tổ chức, doanh nghiệp có phát hành hóa đơn/chứng từ dùng kê khai thuế đến khách hàng:</p>
            <ul>
                <li class="part-list">Bưu chính, viễn thông, truyền hình</li>
                <li class="part-list">Điện, nước, xăng dầu, hệ thống siêu thị</li>
                <li class="part-list">Ngân hàng, tín dụng, chứng khoán, bảo hiểm</li>
                <li class="part-list">Nhà hàng, khách sạn, bán hàng trực tuyến</li>
                <li class="part-list">Các doanh nghiệp cung cấp Dịch vụ, hàng hóa khác…</li>
            </ul>
            <h3>Tính năng và ưu điểm vượt trội của VNPT-INVOICE </h3>
            <ul>
                <li class="part-list">Dễ dàng kết nối/tích hợp với các hệ thống CRM, ERP, Kế toán, Tính cước,…để liên thông và tự động hóa toàn bộ dữ liệu hóa đơn</li>
                <li class="part-list">Cho phép xuất hóa đơn dưới nhiều hình thức: xuất hóa đơn lẻ khi phát sinh giao dịch, xuất hóa đơn định kỳ theo lô</li>
                <li class="part-list">Triển khai hệ thống quản lý và phát hành hóa đơn tập trung tại Trung tâm, cho phép các đơn vị thành viên thực hiện xuất, gửi và khai thác hóa đơn</li>
                <li class="part-list">Tích hợp sẵn giải pháp ký số cho hóa đơn</li>
                <li class="part-list">Đáp ứng nhiều đặc thù quản lý khác nhau của doanh nghiệp</li>
                <div class="diagram">
                    <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/cautruchddt638441956777339645.jpg" alt="Khung chính phủ điện tử">
                </div>
                <h3>Hotline: 18001001 - nhánh số 2
                </h3>
            </ul>

        </section>
    </div>
</body>

</html>
@endsection