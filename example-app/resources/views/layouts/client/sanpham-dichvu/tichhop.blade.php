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
    </style>

    <div class="container">
        <section class="description-section">

            <h3>Giới thiệu</h3>
            <h5>Phần mềm hỗ trợ cấp phát, xác minh văn bằng số</h5>
            <h6>Quản lý đăng ký cấp phát văn bằng số</h6>
            <h6>Quản lý cấp phát văn bằng số</h6>
            <h6>Thu hồi văn bằng số</h6>
            <h6>Phê duyệt văn bằng số</h6>
            <h6>Xác minh văn bằng số
            </h6>
            <ul>
                VNPT Blockchain Digital Certificate System (BDCS) là hệ thống Quản lý và xác minh văn bằng dựa trên nền tảng công nghệ blockchain. VNPT BDCS sẽ làm tăng tính minh bạch, chính xác của công việc cấp văn bằng, tạo thuận lợi cho doanh nghiệp tuyển dụng lao động cần xác minh văn bằng có thể tra cứu tại hệ thống lưu trữ văn bằng trên nền tảng Blockchain
            </ul>
            <h6>Phần mềm thu học phí</h6>
            <h6>Thanh toán học phí</h6>
            <h6>Thanh toán lệ phí </h6>

            <ul>
                Phần mềm hỗ trợ thu học phí thông qua các nền tảng thanh toán (thẻ tín dụng, Internet banking, ...) giúp phụ huynh có thể thanh toán cho con cái thông qua cổng thanh toán.
            </ul>
            <h6>Phần mềm quản lý thư viện cho các trường học</h6>
            <h6>Quản lý sách</h6>
            <h6>Quản lý việc mượn sách</h6>
            <h6>Quản lý thẻ mượn sách</h6>
            <h6>Phân loại đầu sách</h6>
            <h6>Thống kê báo cáo </h6>
            <ul>
                Hệ thống quản lý thư viện cho phép chuẩn hoá và nâng cao hiệu quả công tác quản lý, lưu thông sách, tài liệu trong các thư viện trường học, hướng đến việc xây dựng một trường học chuẩn hoá, hiện đại. Hệ thống bao gồm những nghiệp vụ cụ thể, sát thực nhằm giảm thiểu tối đa công việc phải quản lý bằng tay các hoạt động xuất - nhập kho, theo dõi mượn/trả sách... tại thư viện




            </ul>
            <h6>Thẻ thông minh</h6>
            <h6>Điểm danh</h6>
            <h6>Thanh toán học phí
            </h6>
            <h6>Mượn trả sách thư viện
            </h6>

            <ul>
                Thẻ thông minh thay thế cho thẻ giấy của học sinh nhằm hỗ trợ các công tác: điểm danh, mượn/trả sách thưc viện, thanh toán học phí ...


            </ul>
            <h6>Lớp học thông minh</h6>
            <h6>Tương tác học sinh/giáo viên</h6>
            <h6>Học thông qua thiết bị</h6>
            <h6>Đánh giá hoạt động của học sinh</h6>
            <h6>Khuyến nghị học tập
            </h6>

            <ul>
                Bao gồm hệ thống các phần mềm và thiết bị (máy tính bảng, màn hình cảm ứng, ...) giúp học sinh, giáo viên thực hiện dạy và học đạt hiệu quả cao
            </ul>
        </section>
    </div>
</body>

</html>
@endsection