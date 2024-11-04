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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/Anh/attt.png');
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
        
        h6{
            font-size: 1rem;
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
                <h1>Dịch vụ an toàn thông tin</h1>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 20px; color: white;">Đánh giá, tư vấn, đào tạo, đảm bảo an toàn</span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 20px; color: white;">công nghệ thông  tin cho tổ chức, doanh nghiệp</span></p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>

        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>Ngày 09/10/2017, Bộ Thông Tin và Truyền Thông đã chính thức trao giấy phép kinh doanh sản phẩm, dịch vụ An toàn thông tin mạng cho Tập đoàn Bưu chính Viễn thông VNPT</p>
            <p>VNPT là đơn vị đi đầu trong các hoạt động phát triển và đảm bảo An toàn an ninh thông tin cho các đơn vị, doanh nghiệp và quốc gia. Hiện tại VNPT là thành viên của:</p>
            <ul>
        <li class="part-list">Hiệp hội An toàn thông tin Việt Nam (VNISA)</li>
        <li class="part-list">Liên minh "Xử lý mã độc và phòng, chống tấn công mạng" Việt Nam</li>
        <li class="part-list">Câu lạc bộ Kiểm tra, Đánh giá và Kiểm định an toàn thông tin Việt Nam (VSAC)</li>
            </ul>
            <p>VNPT là đơn vị đầu tiên được Cục An toàn thông tin – Bộ Thông Tin và Truyền Thông xác nhận Giải pháp Giám sát an toàn thông tin đáp ứng yêu cầu kỹ thuật</p>
            <p>Với nhiều năm kinh nghiệm hoạt động trong lĩnh vực An toàn thông tin, VNPT mang đến các giải pháp, dịch vụ đánh giá, tư vấn và đảm bảo An toàn thông tin cho các đơn vị tổ chức.</p>
            <p>Các Sản phẩm, Dịch vụ An toàn thông tin của VNPT cung cấp bao gồm tổ hợp:</p>
            <h6>Giải pháp VNPT Smart IR</h6>
            <p>VNPT Smart IR cho phép truy vấn, điều tra nguyên nhân khi có sự cố về mã độc, giám sát cài đặt phần mềm trái phép và giám sát tuân thủ chính sách bảo mật trên hệ thống CNTT của các tổ chức, doanh nghiệp</p>
            <h6>Giải pháp VNPT DNS Protection</h6>
            <p>DNS Protection là giải pháp thực hiện lọc/chặn các yêu cầu đến các tên miền của các máy chủ độc hại dựa trên danh sách các tên miền được cập nhật và phát hành bởi các tổ chức bảo mật trên thế giới. DNS Protection cung cấp khả năng phát hiện và ngăn chặn kết nối đến các máy chủ độc hại, không mong muốn và đảm bảo an toàn an ninh cho người dùng trong khi sử dụng Internet</p>
            <h6>Dịch vụ Giám sát An toàn thông tin</h6>
            <p>Thu thập thông tin nhật ký các sự kiện an ninh từ các thiết bị đầu cuối của khách hàng, lưu trữ dữ liệu một cách tập trung và phân tích sự tương quan giữa các sự kiện để chỉ ra được các vấn đề về an ninh mà hệ thống đang phải đối mặt</p>
            <h6>Dịch vụ Đánh giá An toàn thông tin</h6>
            <p>Đánh giá tổng thể về các khía cạnh từ hạ tầng mạng, ứng dụng, con người cho đến các quy trình vận hành để chỉ ra các điểm yếu của hệ thống. Dịch vụ giúp phát hiện và loại bỏ những cấu hình, điểm yếu không an toàn khi triển khai cài đặt mới hệ thống, cũng như đối với các hệ thống đang vận hành nhằm tăng cường và bảo đảm an toàn cho hệ thống; tư vấn, khuyến nghị các biện pháp để nâng cao khả năng bảo mật cho hệ thống</p>
            <p>Các dịch vụ Đánh giá An toàn thông tin gồm:</p>
            <ul>
            <li class="part-list">Kiểm thử máy tính người dùng</li>
            <li class="part-list">Kiểm thử hệ thống mạng</li>
            <li class="part-list">Kiểm thử máy chủ</li>
            <li class="part-list">Kiểm thử ứng dụng</li>
            <li class="part-list">Đánh giá chính sách, tuân thủ An toàn thông tin</li>
            <li class="part-list">Đánh giá nhận thức An toàn thông tin</li>
            </ul>
        <h6>Dịch vụ Đào tạo An toàn thông tin</h6>
        <p>Dịch vụ đào tạo an toàn thông tin cung cấp cho học viên kiến thức về các tình huống có thể gây mất An toàn thông tin đối với người dùng thông thường; đào tạo chuyên môn, nghiệp vụ nhằm duy trì, cải thiện kỹ năng đảm bảo An toàn thông tin và khả năng phối hợp xử lý khi có sự cố mất An toàn thông tin cho đội ngũ An toàn bảo mật tại tổ chức, doanh nghiệp</p>
        <p>Các dịch vụ Đào tạo An toàn thông tin gồm:</p>
        <ul>
        <li class="part-list">Đào tạo nhận thức An toàn thông tin</li>
        <li class="part-list">Đào tạo chuyên gia  An toàn thông tin</li>
        <li class="part-list">Tổ chức diễn tập An toàn thông tin</li>
        </ul>
        </section>
    </div>
</body>

</html>
@endsection