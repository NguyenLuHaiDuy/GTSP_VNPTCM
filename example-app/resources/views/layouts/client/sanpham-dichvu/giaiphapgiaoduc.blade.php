@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
<div class="hihi">
<h5>Chính Phủ Điện Tử</h5>
</div>
<div class="card-container">
    
    <div class="card">
        
        <h3 class="card-title">Dạy và Học</h3>
        <p class="card-text">Dạy và học</p>
        <button class="card-button"><a class="hiha" href="dayvahoc.php">Xem thêm</a></button>
    </div>
    <div class="card">
        <h3 class="card-title">Quản lý</h3>
        <p class="card-text">Quản Lý</p>
        <button class="card-button"><a class="hiha" href="quanly.php">Xem thêm</a></button>
    </div>
    <div class="card">
    
        <h3 class="card-title">Tích hợp</h3> 
        <p class="card-text">Tích Hợp</p>
        <button class="card-button"><a class="hiha" href="tichhop.php">Xem thêm</a></button>
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