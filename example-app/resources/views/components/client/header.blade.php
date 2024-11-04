<header>
        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <img src="{{asset('assets/client/images/logoalt.png')}}" class="logo img-fluid" alt="Kind Heart Charity" >
                   
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link click-scroll" href=""><i class="bi bi-house-door-fill"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">GIỚI THIỆU</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('gioithieuchung')}}">GIỚI THIỆU CHUNG</a></li>

                                <li><a class="dropdown-item" href="{{route('cocautochuc')}}">CƠ CẤU TỔ CHỨC</a></li>
                                <li><a class="dropdown-item" href="{{route('tamnhinsumenh')}}">TẦM NHÌN SỨ MỆNH</a></li>
                                <li><a class="dropdown-item" href="{{route('doitac')}}">ĐỐI TÁC</a></li>
                                <li><a class="dropdown-item" href="{{route('khachhang')}}">KHÁCH HÀNG</a></li>
                                <li><a class="dropdown-item" href="{{route('nguonluc')}} ">NGUỒN LỰC</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">TIN TỨC</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('tinvnpt')}}">TIN VNPT</a></li>

                                <li><a class="dropdown-item" href="{{route('tinvnpt-it')}}">TIN VNPT-IT</a></li>
                                <li><a class="dropdown-item" href="{{route('phanhoikhachhang')}}">PHẢN HỒI KHÁCH HÀNG</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">SẢN PHẨM - DỊCH VỤ</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('chinhphudientu')}}">CHÍNH PHỦ ĐIỆN TỬ</a></li>
                                <li><a class="dropdown-item" href="{{route('giaiphapdoanhnghiep')}}">GIẢI PHÁP DOANH NGHIỆP</a></li>
                                <li><a class="dropdown-item" href="{{route('giaiphapgiaoduc')}}">GIẢI PHÁP GIÁO DỤC</a></li>
                                <li><a class="dropdown-item" href="{{route('giaiphapyte')}}">GIẢI PHÁP Y TẾ</a></li>
                                <li><a class="dropdown-item" href="{{route('antoanbaomat')}}">AN TOÀN BẢO MẬT</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">CƠ HỘI NGHỀ NGHIỆP</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('chinhsachnhansu')}}">CHÍNH SÁCH NHÂN SỰ</a></li>

                                <li><a class="dropdown-item" href="{{route('tintuyendung')}}">TIN TUYỂN DỤNG</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{route('goctrainghiem')}}">GÓC TRẢI NGHIỆM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{route('login')}}">NỘI BỘ</a>
                        </li>
                    </ul>
                </div>
            </div>
</nav>
</header>