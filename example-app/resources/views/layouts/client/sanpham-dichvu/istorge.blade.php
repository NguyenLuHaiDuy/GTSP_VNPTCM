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

        .description-section,
        .diagram-section {
            margin-bottom: 40px;
        }

        .description-section p,
        .diagram-section p {
            line-height: 1.6;
            color: #333;
            margin-bottom: 15px;
            font-size: 1.2rem;
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
            color: black;
            list-style-type: none;
        }
    </style>

    <div class="container">
        <section class="description-section">
            <p align="center" style="margin: 0 0 0.0001pt; padding: 0; border: 0; text-align: center; line-height: 20px"><strong style="padding: 0; border: 0"><span style="padding: 0; border: 1pt none rgba(0, 0, 0, 1)"><span style="padding: 0; border: 0">VNPT iStorage</span></span></strong></p>
            <p align="center" style="margin: 0 0 0.0001pt; padding: 0; border: 0; text-align: center; line-height: 20px"><strong style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 1pt none rgba(0, 0, 0, 1)"><span style="padding: 0; border: 0">HỆ THỐNG QUẢN LÝ TÀI LIỆU LƯU TRỮ HỒ SƠ ĐIỆN TỬ</span></span></strong></p>
            <h3>Giới thiệu</h3>
            <p>Là hệ thống thực hiện các nghiệp vụ liên quan đến công tác lưu trữ tài liệu – hồ sơ, bao gồm các công việc tiếp nhận, xác định giá trị, bảo quản, thống kê và sử dụng tài liệu lưu trữ hình thành trong quá trình hoạt động của các cơ quan, tổ chức.

                Hệ thống thực hiện việc nộp lưu hồ sơ điện tử, quản lý/khai thác hồ sơ trên môi trường điện tử; thay thế cho các hoạt động lưu trữ hồ sơ giấy theo các kho, kệ vật lý hiện nay.

            </p>
            <p>Sẵn sàng tích hợp với các nguồn dữ liệu khác nhau để hình thành bộ hồ sơ lưu trữ. VD: Hệ thống Quản lý văn bản điều hành, Hệ thống thông tin xử lý thủ tục hành chính, hệ thống số hóa hồ sơ cũ …

                Sẵn sàng giải pháp để tích hợp dữ liệu với các nguồn lưu trữ quốc gia khi các nguồn lưu trữ này mở kết nối, cho phép tích hợp</p>
            <h3>Các chức năng chính</h3>
            <ul>
                <li class="part-list">Quản trị hệ thống</li>
                <li class="part-list">Quản lý danh mục</li>
                <li class="part-list">Quản lý quy trình động</li>
                <li class="part-list">Lập danh mục hồ sơ</li>
                <li class="part-list">Thu thập tài liệu hồ sơ</li>
                <li class="part-list">Nộp lưu hồ sơ</li>
                <li class="part-list">Thu hồi hồ sơ</li>
                <li class="part-list">Hồ sơ hết hạn bảo quản, tiêu hủy</li>
                <li class="part-list">Quản lý biên bản xử lý hồ sơ</li>
                <li class="part-list">Khai thác hồ sơ</li>
            </ul>
            <h3>Lợi ích mang lại</h3>
            <p>Là công cụ hỗ trợ đắc lực trong việc đẩy mạnh công tác lưu trữ trong cơ quan nhà nước</p>
            <ul>
            <li class="part-list" style="margin: 0; padding: 0; border: 0; list-style-image: initial; line-height: 20px; text-align: left"><span style="font-size: 18px"><strong style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">Nâng cao&nbsp;</span></span></strong><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">công tác lưu trữ hồ sơ</span></span></span></li>
            <li class="part-list" style="margin: 0; padding: 0; border: 0; list-style-image: initial; line-height: 20px; text-align: left"><span style="font-size: 18px"><strong style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">Tạo lập</span></span></strong>&nbsp;<span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">kho&nbsp;</span></span><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">lưu trữ hồ sơ</span></span><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">&nbsp;điện tử</span></span></span></li>
            <li class="part-list" style="margin: 0; padding: 0; border: 0; list-style-image: initial; line-height: 20px; text-align: left"><span style="font-size: 18px"><strong style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">Hỗ trợ&nbsp;</span></span></strong><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">công tác&nbsp;</span></span><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">lưu trữ và khai thác hồ sơ tài liệu</span></span><span style="padding: 0; border: 0"><span style="padding: 0; border: 0; font-size: 18px">:</span></span><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">&nbsp;dễ dàng, tiện lợi</span></span><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">&nbsp;nhanh chóng, chính xác.</span></span></span></li>
            <li class="part-list" style="margin: 0; padding: 0; border: 0; list-style-image: initial; line-height: 20px; text-align: left"><span style="font-size: 18px"><strong style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">Giúp</span></span></strong>&nbsp;<span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">Tra cứu, tìm kiếm hồ sơ lưu trữ nhanh chóng, thuận tiện.</span></span>&nbsp;<span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">Độc giả trong và ngoài đơn vị khai thác hồ sơ tài liệu dễ dàng, thuận lợ</span></span><span style="padding: 0; border: 0; font-size: 18px"><span style="padding: 0; border: 0; font-size: 18px">i</span></span></span></li>
        </ul>
            

        </section>
    </div>
</body>

</html>
@endsection