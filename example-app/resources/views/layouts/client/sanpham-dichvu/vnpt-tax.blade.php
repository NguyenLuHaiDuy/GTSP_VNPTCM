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
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/vnpttax.png');
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
                <h1>VNPT - TAX</h1>
                <p>Phần mềm dịch vụ kê khai thuế điện tử</p>
                <p>Hiệu quả - Tiết kiệm</p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logovnpttax.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <p>Phần mềm dịch vụ VNPT - TAX ra đời với mục đích hướng tới thực hiện điện tử hoá các giao dịch với ngành Thuế nhằm giảm chi phí, giấy tờ trong hoạt động kinh doanh của cộng đồng doanh nghiệp, góp phần tích cực thực hiện cải cách và hiện đại hóa quản lý thuế.</p>
            <p>Phần mềm dịch vụ VNPT- TAX giúp khách hàng tiết kiệm chi phí về thời gian và tiền bạc, đồng thời đảm bảo sự an toàn tin cậy cho từng giao dịch.</p>
            </p>
            <h3>Lợi ích của VNPT TAX</h3>
            <ul>
                <li class="part-list">Thực hiện điện tử hoá việc thực hiện các giao dịch với cơ quan Thuế nhằm giảm chi phí, giấy tờ trong hoạt động kinh doanh của cộng đồng doanh nghiệp, góp phần tích cực thực hiện cải cách và hiện đại hóa quản lý thuế.</p>
                    <li class="part-list">Hỗ trợ Người nộp thuế (NNT) thực hiện nghĩa vụ kê khai thuế nhanh chóng, chính xác. Đồng thời, hỗ trợ cơ quan Thuế tiết kiệm chi phí, nhân lực, tăng cường hiệu quả trong quản lý, xử lý thông tin về thuế.</p>
                    <li class="part-list">Giúp giải quyết những vấn đề đang tồn tại của kê khai điện tử như nghẽn đường truyền, thiếu dịch vụ hỗ trợ khi gặp sự cố. Hồ sơ kê khai thuế của doanh nghiệp khi nộp qua dịch vụ VNPT-TAX sẽ được đảm bảo tiếp nhận thông suốt, doanh nghiệp không phải in tờ khai, không cần đến cơ quan thuế, tờ khai được nộp trực tiếp qua mạng và nhận kết quả ngay. Ngoài ra doanh nghiệp sẽ được hỗ trợ bởi dịch vụ chuyên nghiệp và chu đáo trong quá trình kê khai thuế.</p>
            </ul>

            <h3>Khách hàng cần chuẩn bị sẵn sàng để sử dụng VNPT-TAX</h3>
            <ul>
                <li class="part-list">Đã được cấp Mã số thuế và đang hoạt động (do Tổng cục Thuế thẩm định)</li>
                <li class="part-list">Có chứng thư số do một trong 8 nhà cung cấp chứng thư số công cộng hợp lệ của Việt Nam trong đó có VNPT-CA
                </li>
                <li class="part-list">Máy tính có kết nối Internet
                </li>
                <li class="part-list">Cài đặt Java
                </li>
                <li class="part-list">Cài đặt sẵn Microsoft Office phiên bản 2007 trở lên
                </li>
                <li class="part-list">Cài đặt sẵn phần mềm đọc file .pdf
                </li>
            </ul>
            <h3>Hình thức cung cấp sản phẩm
            </h3>
            <ul>
                <li class="part-list">VNPT-TAX được cung cấp theo dạng cho thuê phần mềm dịch vụ với các gói cước theo thời hạn 1 năm, 2 năm, 3 năm
                </li>
            </ul>
        </section>
    </div>
</body>

</html>


@endsection