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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/imghis.png');
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

        .container .diagram img {
    max-width: 100% !important; /* Thêm !important để chắc chắn rằng nó được ưu tiên */
    height: auto !important;
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
                <h1>VNPT HIS</h1>
                <p>Phần mềm quản lý bệnh viện</p>
                <p>Đáp ứng công tác nghiệp vụ, quản lý bệnh viện</p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logohis.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <h5>1. VNPT HIS:</h5>
            <p>Với sự khảo sát yêu cầu nghiệp vụ thực tế từ các Bệnh viện và sự tư vấn từ các chuyên gia, các y bác sĩ trong và ngoài nước, VNPT đã phát triển thành công sản phẩm VNPT HIS. Đây là giải pháp quản lý tổng thể Bệnh viện, giúp tối ưu hóa quy trình khám chữa bệnh, tiết kiệm thời gian, nhân lực y tế. VNPT HIS được xây dựng tuân theo các tiêu chuẩn của BYT, tiêu chuẩn của thế giới, có khả năng tích hợp với các hệ thống ERP Hospital và hoàn toàn đáp ứng được yêu cầu chuyên môn y tế cũng như công việc quản lý bệnh viện</p>

            <h5>2.1 Kiến trúc hệ thống:</h5>

            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/KienTrucHIS_611638442096733144405.png" alt="Khung chính phủ điện tử">
            </div>
            </p>
            <h5>3.Tính năng sản phẩm: </h5>
            <p>Các chức năng của hệ thống bao phủ được quy trình khám chữa bệnh của bệnh viện: 497 chức năng, 248 tham số phục vụ cấu hình; 96 báo cáo thống kê theo quy định Bộ Y tế, Cục Khám chữa bệnh, Bảo hiểm xã hội, Bộ tài chính; trên 201 báo cáo thống kê phát sinh từ nhu cầu của đơn vị sử dụng. Đồng thời các chức năng liên tục được bổ sung, cập nhật, tối ưu mang lại tiện ích cho người dùng.</p>
            <p>Các chức năng được xây dựng thân thiện, nhiều tiện ích đáp ứng việc thao tác đơn giản, thuận tiện và mang tính ứng dụng cao. </p>
            <p>Ngoài ra, chúng tôi cung ứng các sản phẩm liên thông, kết nối với VNPT HIS như:</p>
            <ul>
                <li class="part-list">VNPT Mini PASC (42 chức năng)</li>
                <li class="part-list">VNPT LIS (24 chức năng)</li>
                <li class="part-list">Hệ thống quản lý tài chính, nhân sự, trang thiết bị…</li>
                <div class="diagram">
                    <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/HIS_TinhNang_6112017638442096904093653.png" alt="Khung chính phủ điện tử">
                </div>
            </ul>
            <h5>3. Ưu điểm nổi bật </h5>
            <h5>3.1 Nghiệp vụ toàn diện </h5>
            <ul>
                Ngoài các chức năng đáp ứng quy trình quản lý BV cơ bản, VNPT HIS được bổ sung nhiều tính năng khác biệt:
                <li class="part-list">Khám sức khỏe theo đoàn</li>
                <li class="part-list">Quản lý máu</li>
                <li class="part-list">Phác đồ điều trị</li>
                <li class="part-list">Quản lý dinh dưỡng</li>
            </ul>
            <h5>3.2: Công nghệ hiện đại</h5>
            <p>Được xây dựng trên nền tảng CNTT hiện đại: Java, Oracle. Ứng dụng trên các giao diện Web, Application và hỗ trợ đầy đủ các trình duyệt: Chrome, Firefox, Cốc Cốc…</p>
            <p>Công nghệ điện toán đám mây được ứng dụng để lưu trữ, sao lưu dữ liệu, phát triển & cập nhật tính năng thuận tiện, an toàn, thông suốt. Đáp ứng truy cấp dữ liệu mọi lúc mọi nơi.</p>
            <p>Khả năng kết nối, chia sẻ thông tin với các hệ thống ngoại vi: LIS, RIS, PACS, Hệ thống xếp hàng thông minh, và các cổng thông tin BYT, BHXH.
            </p>
            <h5>3.3 An toàn bảo mật thông tin
            </h5>
            <p>VNPT có các IDC center tại Hà Nội, Đà Nẵng, Cần Thơ và HCM. CSDL được bảo mật nhiều lớp, chỉ có máy chủ ứng dụng mới được phép kết nối đến cơ sở dữ liệu. Dữ liệu được thực hiện lưu trữ, back up và bảo mật theo chuẩn quốc tế đảm bảo tính an toàn dữ liệu của toàn bộ hệ thống.
            </p>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/Uudiem_1_6112017638442097918776766.png" alt="Khung chính phủ điện tử">
            </div>
            <h5>3.4 Mở rộng linh hoạt </h5>
            <p>Nâng cấp sản phẩm theo các phiên bản thống nhất trên toàn quốc. Đảm bảo cập nhật đồng bộ, kịp thời các quy định của chính phủ, BYT, BHXH.
            </p>
            <p>Hệ thống các cấu hình linh hoạt đảm bảo việc phát triển các quy trình nghiệp vụ đặc thù của từng bệnh viện.

            </p>
            <h5>4. Mô hình triển khai
            </h5>
            <h5>4.1 Cách thức cung cấp dịch vụ:
            </h5>
            <p>VNPT HIS được cung cấp ra thị trường theo định hướng cho thuê dịch vụ phần mềm (SaaS) theo quyết định 80/2014/QĐ-TTg.
            </p>
            <p>Ngoài ra, chúng tôi có thể triển khai toàn bộ giải pháp VNPT HIS trên hạ tầng máy chủ của Bệnh viện.
            </p>
            <h5>4.2 Các bước triển khai:
            </h5>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/Cacbuoctrienkhai_6112017638442098176983483.png" alt="Khung chính phủ điện tử">
            </div>
            <h5>5. Hình ảnh sản phẩm


            </h5>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/Hianhsanpham_6112017638442098437052677.png" alt="Khung chính phủ điện tử">
            </div>
        </section>
    </div>
</body>

</html>
@endsection