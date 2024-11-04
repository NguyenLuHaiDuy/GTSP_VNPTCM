@extends('layouts.master')
@section('contents')
@section('title','Chức Năng')
<style>
    .UIMultiFunction_Default {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .MultiFunctionControl {
            padding: 10px;
        }
        .content {
            text-align: center;
        }
        h4 {
            font-size: 24px;
            color: #007bff; /* Màu xanh chính */
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 cột */
            gap: 10px;
        }
        li {
            box-sizing: border-box;
        }
        img {
            width: 100%;
            height: auto;
           
        }
</style>
<div class="UIMultiFunction_Default">
        <div class="MultiFunctionControl">
            <div class="content">
                <h4>Ban chức năng</h4>
                
                    <div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/Anh/Sodotc.png"></div>
                   
                
            </div>
        </div>
    </div>
@endsection
