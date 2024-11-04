@extends('layouts.master')
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNPT News Section</title>
    <style>
        /* Container for the entire news section */
        .news-container {
            max-width: 800px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        /* Individual news item container */
        .news-item {
            display: flex;
            border-bottom: 1px dashed #ccc;
            padding: 20px 0;
        }

        /* Image container */
        .news-image {
            width: 30%;
            margin-right: 20px;
        }

        .news-image img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Content container */
        .news-content {
            width: 70%;
        }

        /* Title styling */
        .news-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        /* Date and icon styling */
        .news-date {
            color: #666;
            font-size: 0.9em;
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .news-date-icon {
            font-size: 1em;
            margin-right: 5px;
        }

        /* Description styling */
        .news-description {
            font-size: 0.95em;
            color: #555;
            margin-top: 10px;
        }
        .pagination {
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }

    /* Pagination links */
    .pagination-link {
        display: inline-block;
        padding: 10px 15px;
        margin: 0 5px;
        text-decoration: none;
        color: #333;
        background-color: #e0e0e0;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    /* Hover effect for pagination links */
    .pagination-link:hover {
        background-color: #ccc;
    }

    /* Active page styling */
    .pagination-link.active {
        background-color: #d9534f;
        color: #fff;
    }
    </style>
</head>
<body>
    <div class="news-container">
        <!-- News item 1 -->
        <div class="news-item">
            <div class="news-image">
                <img src="{{asset('assets/client/images/news/article (19)638427632340117245.png')}}" alt="VNPT News 1">
            </div>
            <div class="news-content">
                <h3 class="news-title">Tuyển dụng VNPT - IT</h3>
                <div class="news-date">
                    <span class="news-date-icon">🕒</span>
                    <span>18/04/2019</span>
                </div>
            </div>
        </div>
        <div class="pagination">
    <a href="#" class="pagination-link">«</a>
    <a href="#" class="pagination-link active">1</a>
    <a href="#" class="pagination-link">2</a>
    <a href="#" class="pagination-link">3</a>
    <a href="#" class="pagination-link">4</a>
    <a href="#" class="pagination-link">5</a>
    <a href="#" class="pagination-link">»</a>
</div>
    </div>
</body>
</html>

@endsection