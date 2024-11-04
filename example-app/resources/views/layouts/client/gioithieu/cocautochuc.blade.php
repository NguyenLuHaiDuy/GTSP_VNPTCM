@extends('layouts.master')
@section('contents')
@section('title','Cơ cấu tổ chức')
<section class="news-section section-padding" id="section_5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mb-5 text-center">
                <h2>Cơ cấu tổ chức</h2>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="news-item d-flex">
                    <img src="{{asset('assets/client/images/news/1.jpg')}}" class="news-image img-fluid me-3" alt="">
                    <div>
                        <h5 class="news-title"><a href="bantonggiamdoc.php">Ban Tổng Giám Đốc</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="news-item d-flex">
                    <img src="{{asset('assets/client/images/news/2.jpg')}}" class="news-image img-fluid me-3" alt="">
                    <div>
                        <h5 class="news-title"><a href="chucnang.php">Ban Chức Năng</a></h5>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="news-item d-flex">
                    <img src="{{asset('assets/client/images/news/3.jpg')}}" class="news-image img-fluid me-3" alt="">
                    <div>
                        <h5 class="news-title"><a href="chucnangnhiemvu.php">Chức năng nhiệm vụ</a></h5>
                        
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="news-item d-flex">
                    <img src="images/news/462511343_520994474022997_3985544723715894980_n638646904160031717.jpg" class="news-image img-fluid me-3" alt="">
                    <div>
                        <h5 class="news-title"><a href="news-detail.html">Những sản phẩm công nghệ nổi bật của VNPT tại sự kiện Ngày chuyển đổi số Bộ Công An</a></h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="news-item d-flex">
                    <img src="images/news/461951473_513821344740310_2406134488858383491_n638646898371425957.jpg" class="news-image img-fluid me-3" alt="">
                    <div>
                        <h5 class="news-title"><a href="news-detail.html">VNPT tại ngày hội Đổi mới sáng tạo Việt Nam 2024</a></h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="news-item d-flex">
                    <img src="images/news/GDD_1971638628559131616382.jpg" class="news-image img-fluid me-3" alt="">
                    <div>
                        <h5 class="news-title"><a href="news-detail.html">
                            VNPT-IT được vinh danh tại Top 10 doanh nghiệp công nghệ số xuất sắc Việt Nam 2024</a></h5>
                        
                    </div>
                </div>
            </div> -->
            
            
        </div>
    </div>
</section>

@endsection