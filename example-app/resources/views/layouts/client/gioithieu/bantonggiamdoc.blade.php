@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
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