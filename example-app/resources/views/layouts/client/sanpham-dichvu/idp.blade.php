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
            <h3>Hệ thống xác thực định danh điện tử (VNPT IDP)</h3>
            <p>
            <p>Hệ thống xác thực định danh điện tử VNPT IDP là hệ thống cung cấp dịch vụ định danh, xác thực danh tính cho các cơ quan tổ chức, cá nhân tham gia vào giao dịch điện tử. Hệ thống sử dụng công nghệ trí tuệ nhân tạo để bóc tách thông tin trên giấy tờ và xác minh khuôn mặt, sẵn sàng kết nối với nhiều nguồn dữ liệu đáng tin cậy để xác minh danh tính.</p>
            <div class="diagram">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/IDP638441273353695439.jpg" alt="Khung chính phủ điện tử">
            </div>
            <h3>Các chức năng chính</h3>
            <ul>

                <li class="part-list">Đăng ký tài khoản: Đăng ký tài khoản định danh điện tử.</li>
                <li class="part-list">Đăng nhập tài khoản: Đăng nhập tài khoản vào hệ thống dịch vụ.</li>
                <li class="part-list">Thêm phương thức xác thực cho tài khoản: Thêm các phương thức đăng nhập cho tài khoản.</li>
                <li class="part-list">Xem thông tin định danh, điều chỉnh thông tin định danh, đổi mật khẩu, xóa phương thức xác thực,…</li>
            </ul>
            <h3>Đặc điểm, công nghệ nổi bật</h3>
            <ul>
                <li class="part-list">Tích hợp với VNPT BioID, sử dụng công nghệ trí tuệ nhân tạo OCR, xác nhận CMND/Thẻ căn cước/Hộ chiếu, nhận diện khuôn mặt (face recognition).</li>
                <li class="part-list">Hỗ trợ đa dạng các phương thức xác thực tài khoản: password, SMS OTP, USB ký số, SIM ký số, VNPT Smart CA.Cung cấp API để tích hợp với hệ thống của khách hàng.</li>
                <li class="part-list">Lợi ích dịch vụ</li>
                <li class="part-list">Đối với các đơn vị sử dụng dịch vụ xác thực định danh điện tử</li>
                <li class="part-list">Giải pháp xác minh và xác thực theo các mức được quy chuẩn theo các mức đảm bảo tham chiếu theo nghị định định danh và xác thực điện tử.</li>
                <li class="part-list">Giảm chi phí xây dựng hệ thống xác thực định danh điện tử.</li>
            </ul>
            <h3>Đối với người sử dụng:</h3>
            <ul>
                <li class="part-list">Người dùng chỉ cần nhớ một tài khoản để truy cập vào các hệ thống được tích hợp.Có thể dùng tài khoản định danh để thực hiện các dịch vụ trên môi trường điện tử như thực hiện dịch vụ công, thanh toán,…</li>
                <li class="part-list">Giá dịch vụ: được xác định sau khi VNPT tiến hành khảo sát và làm rõ nhu cầu cụ thể của khách hàng.

                    Qúy khách vui lòng liên hệ tổng đài Miễn cước 18001260 hoặc Trung tâm kinh doanh VNPT Tỉnh/TP để biết thêm chi tiết.</li>
            </ul>
            <p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0;">
                <strong style="padding: 0; border: 0; font-size: 18px">
                    <a href="https://vnptit.vn/documents/20194/0/1.+Catalogue_VNPT_IDPv3_2024.pdf/eb686c3e-93ab-4515-8a37-85fc1258d50f" style="color: inherit; background-color: rgba(0, 0, 0, 0); padding: 0; border: 0; text-decoration: none;">
                        <span style="color: rgba(0, 0, 255, 1); padding: 0; border: 0; font-size: 18px">Link download Catalogue sản phẩm</span></a></strong>
            </p>

        </section>
    </div>
</body>

</html>
@endsection