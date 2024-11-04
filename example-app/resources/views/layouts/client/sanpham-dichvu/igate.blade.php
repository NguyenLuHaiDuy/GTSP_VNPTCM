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
    background-color: #78d3ff;
    padding: 50px;
    height: 350px;
    color: white;
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
    margin-bottom: 30px;
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
    background-color: #f5a623; /* Màu vàng cam cho nút "Dùng thử" */
}

.btn-price {
    background-color: #4caf50; /* Màu xanh cho nút "Bảng giá" */
}

.image {
    flex: 1;
    text-align: right;
}

.image img {
    max-width: 50%;
    height: auto;
}
.description-section, .diagram-section {
    margin-bottom: 40px;
}



.description-section p, .diagram-section p {
    line-height: 1.6;
    color: #333;
    margin-bottom: 20px;
}

ul {
    list-style-type: disc;
    margin-left: 20px;
    color: #333;
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
.part-item{
    color: black;
    list-style-type: none;
}
    </style>
    <div class="container">

    
    <section class="hero-section">
        <div class="content">
            <h1>HỆ THỐNG MỘT CỬA LIÊN THÔNG</h1>
            <p>Hiệu quả trong cải cách thủ tục hành chính</p>
            <div class="buttons">
                <a href="#" class="btn btn-try">Dùng thử</a>
                <a href="#" class="btn btn-price">Bảng giá</a>
            </div>
        </div>
        <div class="image">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/san%20pham/article.png" alt="Hệ thống một cửa liên thông">
        </div>
    </section>
    <section class="description-section">
        <h2>Giới thiệu</h2>
        <p>
            Hệ thống Một Cửa điện tử là công cụ giúp cho các cơ quan quản lý nhà nước nâng cao chất lượng phục vụ công dân, tổ chức thông qua việc ứng dụng công nghệ thông tin để tiếp nhận, giải quyết hồ sơ thủ tục hành chính và công khai tình trạng giải quyết hồ sơ.
            <br><br>
            <strong>*Tín hiệu hóa việc giải quyết hồ sơ thủ tục hành chính tại các cơ quan nhà nước theo cơ chế một cửa, cơ chế một cửa liên thông*</strong>
            <br><br>
            Các cơ quan quản lý nhà nước áp dụng:
            <ul class="part-list">
                <li class="part-item">UBND tỉnh và các cơ quan chuyên môn thuộc UBND cấp tỉnh</li>
                <li class="part-item">UBND huyện, quận, thị xã, thành phố thuộc tỉnh</li>
                <li class="part-item">UBND xã, phường, thị trấn</li>
                <li class="part-item">Các cơ quan của Trung ương được ủy quyền cho các cơ quan nhà nước đặt tại địa phương</li>
            </ul>
        </p>
        <h3>Căn cứ pháp lý</h3>
        <p>
            Nghị định số 64/2007/ND-CP ngày 10/4/2007 của Chính phủ về Ứng dụng CNTT trong hoạt động của cơ quan nhà nước.<br>
            Nghị định số 09/2015/QĐ-TTg ngày 25/3/2015 của Thủ tướng Chính phủ về việc ban hành Quy chế thực hiện cơ chế một cửa, cơ chế một cửa liên thông tại các cơ quan hành chính nhà nước ở địa phương.<br>
            Nghị định số 43/2011/NĐ-CP ngày 13/6/2011 của Chính phủ về việc cung cấp thông tin và dịch vụ công trực tuyến trên trang thông tin điện tử hoặc cổng thông tin điện tử của cơ quan nhà nước.<br>
            Chỉ thị số 1725/BTTTT-ƯDCTNTT ngày 4/6/2010 của Bộ Thông Tin và Truyền Thông về việc Hướng dẫn các yêu cầu cơ bản về chức năng, tính năng kỹ thuật cho hệ thống một cửa điện tử.
        </p>
    </section>

    <section class="diagram-section">
        <h3>Khung chính phủ điện tử</h3>
        <div class="diagram">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/Khungchinhphudientu_20122017638427464487449169.png" alt="Khung chính phủ điện tử">
        </div>
        <p>
            <strong>Người sử dụng:</strong> người truy cập, sử dụng dịch vụ CPĐT được cung cấp.<br>
            <strong>Kênh giao tiếp:</strong> giúp người sử dụng truy cập đến các hệ thống tin CPĐT.<br>
            <strong>Dịch vụ công, Dịch vụ công trực tuyến:</strong> Là dịch vụ do một bộ, ngành, tỉnh cung cấp.<br>
            <strong>Ứng dụng và CSDL, chia sẻ kỹ thuật hợp:</strong> các ứng dụng CNTT + Nền tảng chia sẻ, kỹ thuật hợp.<br>
            <strong>Hạ tầng kỹ thuật:</strong> bao gồm các thành phần như mạng nội bộ, các hệ thống điều khiển truy cập, đảm bảo an toàn hệ thống.
        </p>
    </section>
    </div>
</body>
</html>
@endsection