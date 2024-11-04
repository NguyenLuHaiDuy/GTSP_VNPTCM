@extends('layouts.master')
@section('contents')
@title('Trang Chủ')
<main>

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/client/images/slide/article.png')}}" class="carousel-image img-fluid" alt="...">
                            </div>
    
                            <div class="carousel-item">
                                <img src="{{asset('assets/client/images/slide/article1.jpg')}}" class="carousel-image img-fluid" alt="...">
                                
                            
                            </div>
    
                            <div class="carousel-item">
                                <img src="{{asset('assets/client/images/slide/article2.jpg')}}" class="carousel-image img-fluid" alt="...">
                                
                               
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/client/images/slide/article4.jpg')}}" class="carousel-image img-fluid" alt="...">
                                
                               
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/client/images/slide/article3.jpg')}}" class="carousel-image img-fluid" alt="...">
                                
                               
                            </div>
                        </div>
    
                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
    
                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    
    
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-between">
    
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{asset('assets/client/images/icons/icon1.png')}}" class="featured-block-image img-fluid" alt="">
                            <p class="featured-block-text">CHÍNH PHỦ ĐIỆN TỬ</p>
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{asset('assets/client/images/icons/icon2.png')}}" class="featured-block-image img-fluid" alt="">
                            <p class="featured-block-text">AN TOÀN BẢO MẬT</p>
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{asset('assets/client/images/icons/icon3.png')}}" class="featured-block-image img-fluid" alt="">
                            <p class="featured-block-text">QUẢN TRỊ DOANH NGHIỆP</p>
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{asset('assets/client/images/icons/icon4.png')}}" class="featured-block-image img-fluid" alt="">
                            <p class="featured-block-text">GIẢI PHÁP GIÁO DỤC ĐIỆN TỬ</p>
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{asset('assets/client/images/icons/icon5.png')}}" class="featured-block-image img-fluid" alt="">
                            <p class="featured-block-text">TRUNG TÂM DỮ LIỆU                                    </p>
                        </a>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">
    
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Our Causes</h2>
                </div>
    
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{asset('assets/client/images/causes/egov.jpg')}}" class="custom-block-image img-fluid" alt="">
    
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3"><a href="">VNPT-EGOV</a></h5>
                              
                            </div>
                            <a href="donate.html" class="custom-btn btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{asset('assets/client/images/causes/edu.jpg')}}" class="custom-block-image img-fluid" alt="">
    
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3"><a href="">VNPT-EDU</a></h5>
                               
                            </div>
                            <a href="donate.html" class="custom-btn btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{asset('assets/client/images/causes/erp.jpg')}}" class="custom-block-image img-fluid" alt="">
    
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3"><a href="">VNPT-ERP</a></h5>
                                
                            </div>
                            <a href="donate.html" class="custom-btn btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
    
                <!-- New Cause Item -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{asset('assets/client/images/causes/his.jpg')}}" class="custom-block-image img-fluid" alt="">
    
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3"><a href="">VNPT-HIS</a></h5>
                                
                                
                                
                            </div>
                            <a href="donate.html" class="custom-btn btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    
    
    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row justify-content-center">
    
                <div class="col-lg-6 col-12 mx-auto">
                    <h2 class="text-white mb-4 text-center">Liên Hệ</h2>
    
                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                        
    
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="Jack Doe" required>
                            </div>
    
                            <div class="col-lg-6 col-12">    
                                <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                            </div>
    
                            <div class="col-lg-12 col-12">
                                <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Subject" required>
                            </div>
                        </div>
    
                        <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>
    
                        <button type="submit" class="form-control">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news-section section-padding" id="section_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 mb-5 text-center">
                    <h2>Tin tức</h2>
                </div>
    
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="news-item d-flex">
                        <img src="{{asset('assets/client/images/news/1.jpg')}}" class="news-image img-fluid me-3" alt="">
                        <div>
                            <h5 class="news-title"><a href="news-detail.html">VNPT cùng chung tay thúc đẩy ứng dụng hợp đồng điện tử an toàn</a></h5>
                            
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="news-item d-flex">
                        <img src="{{asset('assets/client/images/news/2.jpg')}}" class="news-image img-fluid me-3" alt="">
                        <div>
                            <h5 class="news-title"><a href="news-detail.html">Những sản phẩm công nghệ nổi bật của VNPT tại sự kiện</a></h5>
                            
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="news-item d-flex">
                        <img src="{{asset('assets/client/images/news/3.jpg')}}" class="news-image img-fluid me-3" alt="">
                        <div>
                            <h5 class="news-title"><a href="news-detail.html">VNPT phát triển AI tạo sinh từ góc nhìn thực tiễn</a></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="news-item d-flex">
                        <img src="{{asset('assets/client/images/news/4.jpg')}}" class="news-image img-fluid me-3" alt="">
                        <div>
                            <h5 class="news-title"><a href="news-detail.html">Những sản phẩm công nghệ nổi bật của VNPT tại sự kiện Ngày chuyển đổi số Bộ Công An</a></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="news-item d-flex">
                        <img src="{{asset('assets/client/images/news/5.jpg')}}" class="news-image img-fluid me-3" alt="">
                        <div>
                            <h5 class="news-title"><a href="news-detail.html">VNPT tại ngày hội Đổi mới sáng tạo Việt Nam 2024</a></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="news-item d-flex">
                        <img src="{{asset('assets/client/images/news/GDD_1971638628559131616382.jpg')}}" class="news-image img-fluid me-3" alt="">
                        <div>
                            <h5 class="news-title"><a href="news-detail.html">
                                VNPT-IT được vinh danh tại Top 10 doanh nghiệp công nghệ số xuất sắc Việt Nam 2024</a></h5>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    
    </main>
    @endsection