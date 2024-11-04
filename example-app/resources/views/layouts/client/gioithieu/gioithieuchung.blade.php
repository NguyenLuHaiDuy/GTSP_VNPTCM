@extends('layouts.master')
@section('contents')
@section('title','Giới Thiệu Chung')
<style>
    .about-section {
    padding: 20px;
    font-family: Arial, sans-serif;
    color: #333;
}

h2 {
    color: #007bff !important;
    margin-bottom: 20px;
    text-align: center;
}

/* Styling for the introduction */
.intro p {
    line-height: 1.6;
    margin-bottom: 10px;
}

.intro ul {
    list-style-type: disc;
    margin-left: 20px;
}

.intro ul li {
    margin-bottom: 5px;
}

/* Styling for the business areas */
.business-areas {
    margin-top: 40px;
}

.business-areas p {
    margin-bottom: 10px;
}

/* Styling for the leadership section */
.leadership {
    margin-top: 40px;
}

.leaders {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.leader {
    width: 30%;
    text-align: center;
    margin-bottom: 20px;
}

.leader img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
}

.leader p {
    font-size: 14px;
    line-height: 1.4;
}
.like{
    color: #007bff;
    
}
.partner-item{
    color:black;
    list-style-type: none; 
}
</style>
        
    <section class="about-section">
    <!-- Giới thiệu chung -->
    <div class="intro">
        <h2>GIỚI THIỆU CHUNG</h2>
        <hr class="like">
        <p><strong>Công ty Công nghệ thông tin VNPT (Tên viết tắt: VNPT-IT)</strong> được thành lập theo Quyết định số 389/QĐ-VNPT-HĐTV-NL ngày 01 tháng 03 năm 2018 của Tập đoàn Bưu chính Viễn thông Việt Nam, trên cơ sở tổ chức lại nhiệm vụ và nguồn lực công nghệ thông tin thuộc Tập đoàn VNPT.</p>
        <p>VNPT-IT được thành lập với mục tiêu nghiên cứu phát triển, tích hợp các sản phẩm dịch vụ công nghệ thông tin phục vụ nội bộ Tập đoàn Bưu chính Viễn thông Việt Nam (VNPT) và các dịch vụ công nghệ thông tin cung cấp cho khách hàng trong và ngoài nước.</p>
        <p>VNPT-IT đặt mục tiêu xây dựng một hệ thống tích hợp toàn diện sản phẩm, dịch vụ công nghệ thông tin của VNPT cho khách hàng và chính phủ, bao gồm:</p>
        <ul class="partner-list">
            <li class="partner-item">Con người là chìa khóa</li>
            <li class="partner-item">Khách hàng là trung tâm</li>
            <li class="partner-item">Sáng tạo không ngừng</li>
            <li class="partner-item">Làm chủ hệ sinh thái</li>
        </ul>
    </div>

    <!-- Lĩnh vực kinh doanh -->
    <div class="business-areas">
        <h2>LĨNH VỰC KINH DOANH</h2>
        <p>Hệ thống nghiên cứu, phát triển, sản xuất, kinh doanh các sản phẩm, dịch vụ công nghệ thông tin cho nội bộ VNPT và khách hàng bên ngoài.</p>
        <p>Trong nội bộ, VNPT-IT hỗ trợ Tập đoàn Bưu chính Viễn thông Việt Nam (VNPT) tổ chức hệ thống hành chính sản xuất kinh doanh đảm bảo an toàn, bảo mật thông tin cho các sản phẩm dịch vụ cung cấp đến khách hàng.</p>
    </div>

    <!-- Ban lãnh đạo -->
    <div class="leadership">
        <h2>BAN LÃNH ĐẠO</h2>
        <div class="leaders">
            <div class="leader">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/anhhoso/PhamHuyHoang.jpg" alt="Ông Phạm Huy Hoàng">
                <p><strong>Ông Phạm Huy Hoàng</strong><br>Tổng giám đốc Công ty VNPT-IT</p>
            </div>
            <div class="leader">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/anhhoso/NguyenMinhLuan.jpg" alt="Ông Nguyễn Minh Luân">
                <p><strong>Ông Nguyễn Minh Luân</strong><br>Phó Tổng giám đốc Công ty VNPT-IT</p>
            </div>
            <div class="leader">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/anhhoso/HaThaiBao.png" alt="Ông Hà Thái Bảo">
                <p><strong>Ông Hà Thái Bảo</strong><br>Phó Tổng giám đốc Công ty VNPT-IT</p>
            </div>
            <div class="leader">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/anhhoso/PhamHungThang.jpg" alt="Ông Phạm Hùng Thắng">
                <p><strong>Ông Phạm Hùng Thắng</strong><br>Phó Tổng giám đốc Công ty VNPT-IT</p>
            </div>
            <div class="leader">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/anhhoso/LeXuanSon.jpg" alt="Ông Lê Xuân Sơn">
                <p><strong>Ông Lê Xuân Sơn</strong><br>Phó Tổng giám đốc Công ty VNPT-IT</p>
            </div>
            <div class="leader">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/article (4)638427471638335397.jpg" alt="Ông Nguyễn Đức Kiên">
                <p><strong>Ông Nguyễn Đức Kiên</strong><br>Phó Tổng giám đốc Công ty VNPT-IT</p>
            </div>
        </div>
    </div>
</section>
@endsection