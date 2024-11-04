@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
<div class="hihi">
<h5>Chính Phủ Điện Tử</h5>
</div>
<div class="card-container">
    <div class="card">
        <h3 class="card-title">Giới thiệu trung tâm An Toàn Thông Tin</h3>
        <p class="card-text">Dịch vụ an toàn thông tin</p>
        <button class="card-button"><a class="hiha" href="gioithieu.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <h3 class="card-title">Giải pháp VNPT DNS Protection</h3>
        <p class="card-text">DNS Protection</p>
        <button class="card-button"><a class="hiha" href="">Xem thêm</a></button>
    </div>
    <div class="card">
        <h3 class="card-title"> Giải pháp VNPT Smart IR</h3>
        <p class="card-text">VNPT Smart IR</p>
        <button class="card-button"><a class="hiha" href="">Xem thêm</a></button>
    </div>
    <div class="card">
        <h3 class="card-title">Dịch vụ tư vấn An Toàn Thông Tin</h3>
        <p class="card-text">Dịch vụ tư vấn</p>
        <button class="card-button"><a class="hiha" href="">Xem thêm</a></button>
    </div>
    <div class="card">
        <h3 class="card-title">Dịch vụ kiểm thử xâm nhập</h3>
        <p class="card-text">Dịch vụ kiểm thử</p>
        <button class="card-button"><a class="hiha" href="">Xem thêm</a></button>
    </div>
    <div class="card">
        <h3 class="card-title">Dịch vụ giám sát An Toàn Thông Tin</h3>
        <p class="card-text">Dịch vụ giám sát</p>
        <button class="card-button"><a class="hiha" href="">Xem thêm</a></button>
    </div>
    <div class="card">
        <h3 class="card-title">Dịch vụ đào tạo An Toàn Thông Tin</h3>
        <p class="card-text">Dịch vụ đào tạo</p>
        <button class="card-button"><a class="hiha" href="">Xem thêm</a></button>
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