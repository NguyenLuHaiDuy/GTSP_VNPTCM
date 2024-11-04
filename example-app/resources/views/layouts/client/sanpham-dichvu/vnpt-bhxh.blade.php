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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/bhxh.png');
            padding: 50px;
            height: 400px;
            color: white;
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
            max-width: 50%;
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
        .color{
            color:white;
        }
        .bu{
            color:white;
        }
    </style>

    <div class="container">
        <section class="hero-section">
            <div class="content">
                <h1>VNPT - BHXH</h1>
                <p class="color">Dịch vụ kê khai Bảo Hiểm Xã Hội</p>
                <h2 class="bu">Thuận tiện - Nhanh Chóng</h2>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logobhxh.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            Để cải thiện môi trường kinh doanh, nâng cao năng lực cạnh tranh quốc gia, ngày 18/3/2014, Chính phủ đã ban hành Nghị quyết số 19/NQ-CP đặt ra những nhiệm vụ, giải pháp chủ yếu nhằm hướng tới mục tiêu cải thiện môi trường kinh doanh, nâng cao năng lực cạnh tranh quốc gia. Bảo hiểm xã hội (BHXH) Việt Nam đã tập trung triển khai việc ứng dụng giao dịch BHXH điện tử trên toàn hệ thống. Giao dịch BHXH điện tử giúp đơn vị tham gia BHXH có được công cụ lập thủ tục BHXH đúng quy định của BHXH Việt Nam, hỗ trợ nhiều chức năng tự động giúp giảm thiểu sai sót khi kê khai; giảm thiểu thời gian đi lại giao dịch với cơ quan BHXH, chưa kể thời gian chờ đợi như trước đây để hướng tới mục tiêu giảm thời gian mà doanh nghiệp giao dịch BHXH trung bình xuống 49.5/năm, ngang với trung bình các nước ASEAN 6.
            </p>
            <h3>Khai và nộp hồ sơ BHXH qua mạng là gì?</h3>
           <p>Khách hàng lập hồ sơ BHXH trên máy tính của mình, sau đó ký số và nộp hồ sơ qua internet mà không phải đến nộp trực tiếp hồ sơ giấy tờ cho cơ quan BHXH. Giá trị pháp lý của hồ sơ BHXH điện tử tương đương với hồ sơ giấy tờ BHXH truyền thống.</p>

            <h3>Dịch vụ khai BHXH VNPT giúp khách hàng giải quyết ác yêu cầu sau</h3>
            <p>
            Thực hiện điện tử hóa việc kê khai hồ sơ BHXH nhằm giảm chi phí, giấy tờ trong thủ tục hồ sơ BHXH của tổ chức, doanh nghiệp góp phần tích cực hiện đại thủ tục hành chính.
            </p>
            <p>
            Hỗ trợ người sử dụng lao động thực hiện kê khai hồ sơ BHXH nhanh chóng, chính xác. Đồng thời hỗ trợ cơ quan BHXH tiết kiệm chi phí, nhân lực, tăng cường hiệu quả trong quản lý, xử lý hồ sơ BHXH.
            </p>
            <p>
            Giúp giải quyết những vấn đề như nghẽn đường truyền, thiếu dịch vụ hỗ trợ khi cần trợ giúp. Khi sử dụng dịch vụ VNPT-BHXH, hồ sơ điện tử được đảm bảo giao dịch thông suốt, khách hàng không phải in hồ sơ, không cần đến cơ quan BHXH, hồ sơ được nộp trực tuyến và nhận kết quả ngay. Ngoài ra khách hàng sẽ được hồ trợ chuyên nghiệp và chu đáo trong quá trình sử dụng VNPT-BHXH.
            </p>
            <p>VNPT-BHXH là phần mềm dịch vụ kê khai và nộp hồ sơ BHXH điện tử của Tập đoàn Bưu chính viễn thông Việt Nam (VNPT) đáp ứng mọi giao dịch bảo hiểm xã hội phục vụ tổ chức, doanh nghiệp sử dụng lao động đăng ký hoạt động trên lãnh thổ Việt Nam.</p>
            <p>
            Dịch vụ VNPT BHXH là dịch vụ khai và nộp hồ sơ BHXH qua mạng của Tập đoàn Bưu chính viễn thông Việt Nam (VNPT) sẵn sàng đáp ứng mọi nghiệm vụ liên quan đến bảo hiểm xã hội phục vụ tổ chức, doanh nghiệp


            </p>
        </section>
    </div>
</body>

</html>
@endsection