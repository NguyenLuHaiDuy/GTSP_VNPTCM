@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
<div class="hihi">
<h5>Chính Phủ Điện Tử</h5>
</div>
<div class="card-container">
    
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/erp.png')}}" alt="VNPT-eGov 2.0" class="card-image">
        <h3 class="card-title">VNPT-ERP</h3>
        <p class="card-text">Hệ thống phần mềm quản trị doanh nghiệp </p>
        <button class="card-button"><a class="hiha" href="vnpt-erp.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/tax.png')}}" alt="VNPT-iGate" class="card-image">
        <h3 class="card-title">VNPT-TAX</h3>
        <p class="card-text">Phần mềm dịch vụ kê khai thuế điện tử</p>
        <button class="card-button"><a class="hiha" href="vnpt-tax.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/logobhxh.png')}}" alt="VNPT-iOffice" class="card-image">
        <h3 class="card-title">VNPT-BHXH</h3>
        <p class="card-text">Dịch vụ kê khai Bảo Hiểm Xã Hội        </p>
        <button class="card-button"><a class="hiha" href="vnpt-bhxh.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/dms.png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-DMS</h3>
        <p class="card-text">Phần mềm quản lý kênh phân phối</p>
        <button class="card-button"><a class="hiha" href="dms.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/pos.png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-POS</h3>
        <p class="card-text">Phần mềm quản lý cửa hàng bán lẻ</p>
        <button class="card-button"><a class="hiha" href="pos.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/logocheck.png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-CHECK</h3>
        <p class="card-text">Phần mềm quản lý nguồn gốc hàng hóa</p>
        <button class="card-button"><a class="hiha" href="check.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/logohddt.png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">Hóa Đơn Điện Tử</h3>
        <p class="card-text">Dịch vụ Hóa đơn điện tử        </p>
        <button class="card-button"><a class="hiha" href="hddt.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <img src="{{asset('assets/client/images/chinhphudientu/logoca.png')}}" alt="VNPT-HIS" class="card-image">
        <h3 class="card-title">VNPT-CA</h3>
        <p class="card-text">Dịch vụ chữ kỹ số</p>
        <button class="card-button"><a class="hiha" href="ca.php">Xem thêm</a></button>
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