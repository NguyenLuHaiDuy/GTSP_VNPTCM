@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
<div class="hihi">
<h5>Chính Phủ Điện Tử</h5>
</div>
<div class="card-container">
    
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/egov2.0638451443583444120.png')}}" alt="VNPT-eGov 2.0" class="card-image">
        <h3 class="card-title">VNPT-eGov 2.0</h3>
        <p class="card-text">Chính phủ điện tử </p>
        <button class="card-button"><a class="hiha" href="egov.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/article.png')}}" alt="VNPT-iGate" class="card-image">
        <h3 class="card-title">VNPT-iGate</h3>
        <p class="card-text">HỆ THỐNG MỘT CỬA LIÊN THÔNG</p>
        <button class="card-button"><a class="hiha" href="igate.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/article (20).png')}}" alt="VNPT-iOffice" class="card-image">
        <h3 class="card-title">VNPT-iOffice</h3>
        <p class="card-text">HỆ THỐNG VĂN BẢN ĐIỀU HÀNH</p>
        <button class="card-button"><a class="hiha" href="ioffice.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/logoportal.png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-Portal</h3>
        <p class="card-text">CỔNG THÔNG TIN ĐIỆN TỬ</p>
        <button class="card-button"><a class="hiha" href="portal.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/article (22).png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-SSO</h3>
        <p class="card-text">HỆ THỐNG XÁC THỰC NGƯỜI DÙNG TẬP TRUNG</p>
        <button class="card-button"><a class="hiha" href="sso.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/logoolap.png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-Olap</h3>
        <p class="card-text">Hệ thống báo cáo, tổng hợp dữ liệu động</p>
        <button class="card-button"><a class="hiha" href="olap.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/article (24).png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-CCVC</h3>
        <p class="card-text">Giải pháp quản lý nhân sự</p>
        <button class="card-button"><a class="hiha" href="ccvc.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/IDP638441273353695439.jpg')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-IDP</h3>
        <p class="card-text">Hệ thống xác thực định danh điện tử (VNPT IDP)</p>
        <button class="card-button"><a class="hiha" href="idp.php">Xem thêm</a></button>
    </div>
    <div class="card">
       
        <h3 class="card-title">VNPT-iStorge</h3>
        <p class="card-text">HỆ THỐNG QUẢN LÝ TÀI LIỆU LƯU TRỮ HỒ SƠ ĐIỆN TỬ</p>
        <button class="card-button"><a class="hiha" href="istorge.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/VNPT - Truc lien thong - VXP638441275147312353.jpg')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-VXP</h3>
        <p class="card-text">Nền tảng tích hợp và chia sẻ dữ liệu (VNPT VXP)</p>
        <button class="card-button"><a class="hiha" href="vxp.php">Xem thêm</a></button>
    </div>
</div>

<style>
    .card-container {
        display: flex;
        gap: 30px;
        justify-content: center;
        align-items: stretch;
        flex-wrap: wrap;
        max-width: 1100px; /* Set a max-width to control the number of cards per row */
        margin: 30px auto;
    }
    .hihi{
        text-align: center;
        margin: 20px;
    }
    .hiha{
        color: white;
    }
    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 250px;
    }

    .card-image {
        width: 60%;
        height: auto;
        border-radius: 8px;
    }

    .card-title {
        font-size: 1.5em;
        color: #0066cc;
        margin-top: 20px;
    }

    .card-text {
        flex-grow: 1;
        font-size: 1em;
        color: #666;
        margin: 20px 0;
    }

    .card-button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 25px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s ease;
    }

    .card-button:hover {
        background-color: #0056b3;
    }
</style>
@endsection