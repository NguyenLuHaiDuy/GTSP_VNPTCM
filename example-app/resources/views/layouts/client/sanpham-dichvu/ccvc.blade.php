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
            /* Căn đều nội dung */
            align-items: center;
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/san%20pham/article%20(24).png');
            background-size: cover;
            /* Đảm bảo hình nền bao phủ toàn bộ khu vực */
            background-position: center;
            /* Căn giữa hình nền */
            background-repeat: no-repeat;
            /* Không lặp lại hình nền */
            padding: 50px;
            height: 400px;
            width: 100%;
            /* Đảm bảo chiều rộng vừa đủ */
            color: #0066b3;
        }


        .hero-section.content {
            flex: 1;
            max-width: 600px;
            /* Đặt giới hạn chiều rộng cho nội dung */
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
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 24px; color: #0066b3;">Giải pháp quản lý nhân sự</span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 24px; color: #0066b3;">tổng thể đơn vị quản lý nhà nước,</span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 24px; color: #0066b3;">hành chính sự nghiệp</span></p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>

        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <p>Phần mềm Quản lý Cán bộ Công chức Viên chức (VNPT CCVC) là giải pháp quản lý Cán bộ Công chức, Viên chức một cách tổng thể và có hệ thống tại:</p>
            <ul>
                <li class="part-list">Các đơn vị quản lý nhà nước và hành chính sự nghiệp.</li>
                <li class="part-list">Các cơ quan quản lý nhà nước từ cấp trung ương tới địa phương</li>
                <li class="part-list">Các đơn vị hành chính sự nghiệp từ cấp trung ương tới địa phương…</li>
            </ul>
            <h3>Mô hình triễn khai</h3>
            <ul>
                <p>Giải pháp trọn gói:</p>
                <li class="part-list">Hạ tầng của khách hàng</li>
                <li class="part-list">Dịch vụ hỗ trợ vận hành khai thác</li>
                <li class="part-list">Đầu tư một lần</li>
                <p>Dịch vụ sass:</p>
                <li class="part-list">Hạ tầng VNPT Cloud, cung cấp theo nhu cầu sử dụng linh hoạt</li>
                <li class="part-list">Dịch vụ tư vấn quy trình nghiệp vụ</li>
                <li class="part-list">Chi phí thường xuyên</li>
            </ul>
            <h3>Công nghệ xây dựng hệ thống</h3>
            <ul>
                <li class="part-list">Cơ sở dữ liệu: PostgreSQL</li>
                <li class="part-list">Vận hành trên mạng Internet/WAN/LAN.</li>
                <li class="part-list">Nền tảng công nghệ phát triển OpenERP/Odoo</li>
                <li class="part-list">Nền tảng web, tương thích các web-browser thông dụng Mozillar FireFox, Apple Safari, Google Chrome, Microsoft IE</li>
            </ul>
            <h3>Chức năng hệ thống</h3>
            <h3>1. Quản lý tổ chức đơn vị</h3>
            <p>Cho phép thiết lập theo mô hình đa cấp, quản lý thông tin và mối quan hệ giữa các phòng ban, tổ chức trong đơn</p>
            <h3>2. Quản lý hồ sơ cán bộ công chức viên chức</h3>
            <p>Khai báo và lưu trữ danh sách và các thông tin liên quan tới cán bộ công chức viên chức trong đơn vị</p>
            <h3>3. Quản lý lao động</h3>
            <p>Quản lý và lưu trữ các thông tin và các nghiệp vụ liên quan trong quá trình cán bộ công chức viên chức làm việc tại đơn vị</p>
            <h3>4. Quản lý bảo hiểm
            </h3>
            <p>Quản lý thông tin bảo hiểm, giải quyết thông tin chế độ bảo hiểm trong quá trình đóng bảo hiểm theo từng đơn vị hoặc từng người cụ thể

            </p>

            <h3>5. Đánh giá cán bộ
            </h3>
            <p>Quản lý thông tin tự đánh giá và đánh giá cán bộ công chức viên chức tại đơn vị

            </p>

            <h3>6. Quản lý thi/ xét tuyểnnâng ngạch/ thăng hạng:</h3>
            <p>Cho phép theo dõi quản lý thông tin về kế hoạch tuyển và kết quả quá trình thực hiện tuyển dụng cán bộ công chức viên chức mới; việc thi tuyển xét tuyển nâng ngạch với công chức, nâng hạng với viên chức.</p>

            <h3>7. Quản lý đào tạo
            </h3>
            <p>Lập kế hoạch và theo dõi thực hiện đào tạo nhân viên

            </p>

            <h3>8. Quản lý lương</h3>
            <p>Phục vụ công tác tính lương và trả lương cho cán bộ công chức viên chức trong đơn vị, đảm bảo tính chính xác, nhanh chóng, kịp thời</p>

            <h3>9. Giải quyết chế độ</h3>
            <p>Hỗ trợ giải quyết chế độ hưu trí, bàn giao hồ sơ

            </p>

            <h3>10. Hệ thống báo cáo</h3>
            <p>Hệ thống báo cáo và thống kê sẵn có tính linh động, nhanh và chính xác, cung cấp thông tin đầy đủ cho người dùng cũng như phục vụ tối ưu cho các mục đích quản trị trong đơn vị.

            </p>

            <h3>11. Các quy định pháp luật</h3>
            <p>NĐ số 4223/QĐ-BNV ngày 30/11/2016: quyết định ban hành chuẩn thông tin và quy định kỹ thuật dùng cho phần mềm, cơ sở dữ liệu cán bộ công chức viên chức và cán bộ công chức cấp xã</p>
              <p>  NĐ 204/2004/NĐ-CP về chế độ tiền lương cho cán bộ công chức, viên chức và lực lượng vũ trang và NĐ số 76/2009/NĐ-CP sửa đổi bổ sung NĐ 204.</p>
                <p>NĐ số 46/2010/NĐ-CP : quy định về thôi việc và thủ tục nghỉ hưu đối với công chức</p>
               <p>QĐ số 27/2003/QĐ-TTG: quyết định ban hành quy chế bổ nhiệm, bổ nhiệm lại, luân chuyển, từ chức, miễn nhiệm cán bộ, công chức lãnh đạo</p> 
               <p>Luật số 58/2010/QH12: luật viên chức</p> 
                <p>Luật số 22/2008/QH12: luật cán bộ, công chức hồ sơ báo cáo</p>


        </section>
    </div>
</body>

</html>



@endsection