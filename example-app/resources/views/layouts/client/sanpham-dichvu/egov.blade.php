@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px 0;
}

/* Banner Section */
.banner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #e5f6ff;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
    flex-direction: row; /* Hình bên trái, chữ bên phải */
}

.banner-left {
    flex: 0 0 200px; /* Đảm bảo kích thước hình ảnh */
}

.banner-left img {
    width: 500px;
    height: auto;
}

.banner-right {
    flex: 1;
    padding-left: 20px;
}

.banner-right p, .banner-right ul {
    font-size: 1.1rem;
    color: #333;
}



.service-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content:center;
}

.service {
    width: 30%;
    color: white;
    text-align: center;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden; 
}

.service img {
    width: 100%; 
    height: auto;
    object-fit: cover; 
    margin-bottom: 15px;
}
.part-item{
    color: black;
    list-style-type: none;
}



    </style>
<div class="container">
    <div class="banner">
        <div class="banner-left">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/egov2.0638451443583444120.png" alt="VNPT eGov 2.0">
        </div>
        <div class="banner-right">
            <p>Giải pháp Chính phủ điện tử - VNPT eGov 2.0 đáp ứng khung kiến trúc Chính phủ điện tử Việt nam, có khả năng triển khai linh hoạt:</p>
            <ul class="part-list">
                <li class="part-item">Dịch vụ công trực tuyến</li>
                <li class="part-item">Quản lý công dân</li>
                <li class="part-item">Ứng dụng chuyên ngành: Quản lý hộ tịch, đăng ký kinh doanh, quản lý đất đai, …</li>
                <li class="part-item">Một cửa điện tử liên thông: Tiếp nhận, thụ lý và trả kết quả hồ sơ thủ tục hành chính thông qua Một cửa điện tử liên thông</li>
            </ul>
        </div>
    </div>
</div>



        <!-- Service List Section -->
        <div class="service-list">
            <div class="service">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">
                
            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
            <div class="service">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article%20(12)638427625111392593.png" alt="Hệ thống một cửa liên thông">

            </div>
        </div>
    </div>

@endsection