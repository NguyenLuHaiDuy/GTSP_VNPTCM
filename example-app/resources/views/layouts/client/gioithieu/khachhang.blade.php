@extends('layouts.master')
@section('contents')
@section('title','Khách Hàng')
<style>
    .UIMultiFunction_Default {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .MultiFunctionControl {
        padding: 10px;
    }

    .content {
        text-align: center;
    }

    h4 {
        font-size: 24px;
        color: #007bff;
        margin-bottom: 20px;
    }
    .partner-list {
    list-style-type: none; 
    padding: 0; 
    margin: 0; 
    display: grid; 
    grid-template-columns: repeat(4, 1fr); 
    gap: 10px; 
}

.partner-item { 
    box-sizing: border-box;
}

.partner-item img { 
    width: 100%;
    height: auto; 
    border-radius: 8px; 
    border: 1px solid #ddd; 
}


.partner-item {
    transition: transform 0.3s; 
}

.partner-item:hover {
    transform: scale(1.05); 
    cursor: pointer; 
}

</style>
<main>
<div class="UIMultiFunction_Default">
    <div class="MultiFunctionControl">
        <div class="content">
            <h4>Đối tác và khách hàng</h4>
            <ul class="partner-list"> 
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (4).png"></div></li>
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (5).png"></div></li>
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (6).png"></div></li>
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (7).png"></div></li>
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (8).png"></div></li>
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (9).png"></div></li>
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (10).png"></div></li>
                <li class="partner-item"><div><img loading="lazy" alt="image" src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/doitac/article (11).png"></div></li>
            </ul>
        </div>
    </div>
</div>

</main>
@endsection
>