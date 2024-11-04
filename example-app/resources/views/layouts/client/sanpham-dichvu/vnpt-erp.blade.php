@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống một cửa liên thông</title>

</head>

<body>
    <style>
        .container {
            padding: 20px;
        }

        .hero-section {
            display: flex;
            justify-content: space-between;
            /* Căn đều nội dung */
            align-items: center;
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/erp.png');
            background-size: cover;
            /* Đảm bảo hình nền bao phủ toàn bộ khu vực */
            background-position: center;
            /* Căn giữa hình nền */
            background-repeat: no-repeat;
            /* Không lặp lại hình nền */
            padding: 50px;
            height: 400px;
            width: 100%;
            /* Đảm bảo chiều rộng vừa đủ */
            color: #0066b3;
        }


        .hero-section.content {
            flex: 1;
            max-width: 600px;
            /* Đặt giới hạn chiều rộng cho nội dung */
            width: 100%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 15px;
            line-height: 1.6;
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn-try {
            background-color: #f5a623;
            /* Màu vàng cam cho nút "Dùng thử" */
        }

        .btn-price {
            background-color: #4caf50;
            /* Màu xanh cho nút "Bảng giá" */
        }

        .image {
            flex: 1;
            text-align: right;
        }

        .image img {
            max-width: 100%;
            height: auto;
        }

        .description-section,
        .diagram-section {
            margin-bottom: 40px;
        }

        .description-section p,
        .diagram-section p {
            line-height: 1.6;
            color: #333;
            margin-bottom: 15px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
            /* Increased margin for better indentation */
            color: #333;
            margin-bottom: 15px;
            /* Add bottom margin to space out list items */
        }

        ul li {
            margin-bottom: 10px;
            /* Adding space between list items */
        }

        p {
            margin-top: 20px;
            /* Adding space above paragraphs for better readability */
        }

        .diagram-section .diagram {
            text-align: center;
            margin-bottom: 20px;
        }

        .diagram-section .diagram img {
            max-width: 100%;
            height: auto;
        }

        .diagram-section p {
            font-size: 1rem;
        }
        #tabs {
    border: solid #ddd; 
    border-radius: 10px; 
    padding: 20px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
}

#tabs ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex; 
    border-bottom:  solid #ddd;
}

#tabs ul li {
    margin-right: 10px;
}

#tabs ul li a {
    display: block;
    padding: 10px 10px;
    background-color: #007bff; 
    color: white; 
    text-decoration: none; 
    border-radius: 5px 5px 0 0; 
}

#tabs ul li.ui-tabs-active a {
    background-color: #0056b3; 
}

#tabs div {
    padding: 20px;
    background-color: white; 
    border-radius: 0 0 10px 10px; 
    margin-top: -5px;
}
.part-list{
    color:black;
    list-style-type: none;
}

    </style>

    <div class="container">
        <section class="hero-section">
            <div class="content">
                <h1>VNPT ERP</h1>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 24px; color: #0066b3;">Hệ thống phần mềm quản trị doanh nghiệp,</span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 24px; color: #0066b3;">Quản lý mua hàng bán hàng,</span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 24px; color: #0066b3;">Quản lý sản xuất kho hàng,</span></p>
                <p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 24px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; line-height: 20px; color: #ffffff; font-family: Arial;"><span style="padding: 0px; border: 0px; -webkit-font-smoothing: antialiased; -webkit-text-stroke-color: initial; text-rendering: geometricprecision; font-size: 24px; color: #0066b3;">Quản lý dự án, CRM, BSC/KPI....</span></p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>

        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>
            <p>
            <p>VNPT ERP là giải pháp chủ lực của VNPT trong lĩnh vực quản trị doanh nghiệp SME:
            <p>Hệ thống phần mềm quản trị doanh nghiệp VNPT ERP gồm các module tích hợp sâu được thiết kế, phát triển trên cơ sở đáp ứng các nhu cầu thực tế của doanh nghiệp về quản trị điều hành và thực hiện tác nghiệp các hoạt động sản xuất, kinh doanh, quản trị, trợ giúp lãnh đạo và các cấp quản lý ra quyết định;</p>
            <p>Hệ thống cung cấp các giải pháp quản trị doanh nghiệp gồm đầy đủ các nghiệp vụ chính
                như Quản lý nhân sự tiền lương; Quản lý kho; CRM; Quản lý dự án; Quản lý mua hàng và bán hàng; Quản trị tài chính kế toán; Quản lý tài sản và trang Portal
                cho doanh nghiệp;
            </p>
            <p>Hệ thống cũng cung cấp các công cụ hỗ trợ nghiệp vụ Logistics, Quản lý điểm bán lẻ;</p>

            </p>
            <h3>1. ĐỐI TƯỢNG SỬ DỤNG</h3>
            <ul>

                <li class="part-list">Doanh nghiệp SME thực hiện sản xuất và tự cung ứng thành phẩm đến khách hàng theo chuỗi các điểm bán lẻ hoặc kênh đại lý;</li>
                <li class="part-list">Doanh nghiệp kinh doanh thương mại qua kênh phân phối bán lẻ, bán buôn;</li>
                <li class="part-list">Doanh nghiệp SME có nhu cầu sử dụng một số module ERP;</li>
            </ul>
            <h3>2. CÔNG NGHỆ XÂY DỰNG HỆ THỐNG</h3>
            <ul>
                <li class="part-list">Nền tảng công nghệ phát triển của hãng Oddo</li>
                <li class="part-list">Cơ sở dữ liệu: PortgreSQL</li>
                <li class="part-list">Core framework: OpenERP lastest version</li>
                <li class="part-list">Vận hành trên mạng Internet/WAN/LAN/VLAN</li>
                <li class="part-list">Nền tảng web, tương thích các web-browser thông dụng Mozillar FireFox, Apple Safari, Google Chrome, Microsoft IE</li>
                <li class="part-list">Sử dụng trên máy tính và thiết bị cầm tay smartphone, tablet;</li>
            </ul>
            <h3>3. MÔ HÌNH TRIỂN KHAI</h3>
            <ul>
                <li class="part-list">Giải pháp trọn gói:</li>
                <li class="part-list">Hạ tầng của khách hàng</li>
                <li class="part-list">Đầu tư từng module theo nhu cầu và lộ trình</li>
                <li class="part-list">Dịch vụ hỗ trợ, quản trị, vận hành</li>
                <li class="part-list">Dịch vụ SaaS:</li>
                <li class="part-list">Hạ tầng VNPT Cloud, cung cấp theo nhu cầu sử dụng linh hoạt</li>
                <li class="part-list">Dịch vụ tư vấn quy trình nghiệp vụ</li>
                <li class="part-list">Chi phí thường xuyên
                </li>
            </ul>
            <h3>4. LỢI THẾ VNPT</h3>
            <ul>
                <li class="part-list">Hạ tầng mạng lưới dẫn đầu</li>
                <li class="part-list">Hỗ trợ nghiệp vụ 63 tỉnh thành toàn quốc</li>
                <li class="part-list">Đội ngũ nhân lực trình độ cao, chuyên nghiệp</li>
                <li class="part-list">Kinh nghiệm chuyên gia về tư vấn, triển khai</li>
            </ul>

        </section>
        <div id="tabs" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
            <ul style="min-height: 33px;" role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
                <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">Chức năng hệ thống</a></li>
            </ul>
            <div id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false">
                <p style="text-align: left;"><strong>1. Quản lý nhân sự tiền lương</strong></p>

                <div style="text-align: left;">
                    <p style="text-align: justify;">Quản lý tổ chức đơn vị đa cấp, dễ thực hiện các nghiệp vụ tổ chức thành lập mới các đơn vị cũng như giải thể, sát nhập, chia tách các đơn vị.</p>
                    <p style="text-align: justify;">Quản lý hồ sơ nhân sự từ thông tin cơ bản đến lý lịch chi tiết.</p>
                    <p style="text-align: justify;">Quản lý chấm công kiểm soát thời gian làm việc, làm thêm, tăng ca, nghỉ phép của nhân viên, cho phép thực hiện linh hoạt nhiều phương pháp chấm công.</p>
                    <p style="text-align: justify;">Quản lý bảo hiểm và các khoản khấu trừ;</p>
                    <p style="text-align: justify;">Quản lý tính lương theo nhiều hình thức cơ bản hoặc kết hợp cho nhiều nhóm đối tượng từ tính lương theo thời gian, tính lương theo sản phẩm, tính lương theo doanh thu hoặc tính lương 3Ps.</p>
                    <p style="text-align: justify;">Quản lý đánh giá nhân viên: theo các tiêu chí đánh giá được thiết lập linh động</p>
                    <p style="text-align: justify;">Quản lý tuyển dụng: thống kê các công việc, vị trí còn trống, đơn ứng tuyển, phỏng vấn, xử lý các bước trong quy trình tuyển dụng, phục vụ công tác hoạch định nguồn nhân lực hiệu quả</p>
                    <p style="text-align: justify;">Quản lý đào tạo;</p>
                </div>

                <p style="text-align: left;"><strong>2. Quản lý BSC/KPI</strong></p>

                <div style="text-align: left;">
                    <p style="text-align: justify;">Quản lý giao và đánh giá BSC/KPI đơn vị như: giao KPI đơn vi; báo cáo KRI đơn vị; thẩm định BSC đơn vị; công bố BSC đơn vị; đánh giá BSC đơn vị.</p>
                    <p style="text-align: justify;">Quản lý đăng ký và đánh giá KRI đơn vị; giao KRI cho đơn vị như: đăng ký KRI đơn vị, xác nhân KRI đơn vị, thẩm định và đánh giá KRI đơn vị và lãnh đạo thực hiện giao KRI cho đơn vị.</p>
                    <p style="text-align: justify;">Quản lý đăng ký và đánh giá KRI cá nhân: đăng ký KRI cá nhân, xác nhận KRI cá nhân, đánh giá và xếp loại cá nhân.</p>
                    <p style="text-align: justify;">Thiết lập nhắc việc bằng Email/SMS tự động.</p>
                    <p style="text-align: justify;">Hệ thống báo cáo quản trị, phân tích hệ thống.</p>
                </div>

                <p style="text-align: left;"><strong>3. Quản lý kho</strong></p>

                <div style="text-align: left;">
                    <p style="text-align: justify;">Quản lý hệ thống kho bãi và vị trí địa điểm dãy, lô, kệ, giá, tầng, ngăn,.. một cách linh động theo nhu cầu; Quản lý sức chứa, sức tải, vị trí không gian tại các điều kiện môi trường như nhiệt độ, độ ẩm, ánh sáng, độ thoáng gió;</p>
                    <p style="text-align: justify;">Quản lý hệ thống thông tin sản phẩm và đánh mã vạch sản phẩm, lô bộ, bao gói nhiều lớp hỗ trợ cho áp dụng quy trình quản lý kho tự động;</p>
                    <p style="text-align: justify;">Quản lý các hoạt động kho như nhập kho; xuất kho; dịch chuyển kho; tái sắp xếp kho; hủy hàng hết hạn theo yêu cầu;</p>
                    <p style="text-align: justify;">Quản lý hỗ trợ gợi ý vị trí lô trống, gợi ý vị trí nhặt hàng, đóng gói đảm bảo các nguyên tắc FIFO, LIFO, FEFO;</p>
                    <p style="text-align: justify;">Quản lý hàng hóa theo lô/số sê-ri và truy xuất nguồn gốc đầy đủ;</p>
                    <p style="text-align: justify;">Tự động lập phiếu xuất hàng và phiếu đề xuất cung ứng trên các nguyên tắc đã thiết lập từ nhu cầu đặt hàng, sản xuất, bán hàng, chuyển kho, phân phối;</p>
                    <p style="text-align: justify;">Thực hiện kiểm kê và điều chỉnh kiểm kê.</p>
                    <p style="text-align: justify;">Quản lý định mức tồn kho gồm tồn min và tồn max, kiểm soát lượng hàng hợp lý cân đối cho cả cho hoạt động lưu kho và logistics.</p>
                    <p style="text-align: justify;">In các phiếu kho, lập báo cáo hoạt động kho, báo cáo cảnh báo theo yêu cầu.</p>
                </div>

                <p style="text-align: left;"><strong>4. Quản lý khách hàng - CRM7</strong></p>

                <div style="text-align: left;">
                    <p style="text-align: justify;">Quản lý thông tin pên hệ đa vai trò như khách hàng, người đại diện, nhà cung cấp, đại lý</p>
                    <p style="text-align: justify;">Quản lý giao tiếp khách hàng đa hình thức Email, Cuộc gọi, Cuộc họp qua nhiều giai đoạn từ Đầu mối, cơ hội, pre-sales, dàm phán, đề xuất, đơn hàng, ký hợp đồng, after-sales, khiếu nại và xử lý khiếu nại. Hỗ trợ các cấp quản lý và bộ phận kinh doanh tối ưu hóa quy trình bán hàng và cung cấp dịch vụ;</p>
                    <p style="text-align: justify;">Quản lý marketing: quản lý chính sách và chiến dịch marketing; gửi thư giao dịch và quảng bá; khảo sát và thu thập servey;</p>
                    <p style="text-align: justify;">Quản lý chăm sóc khách hàng: quản lý tích điểm khách hàng; xếp hạng khách hàng và cấp thẻ VIP; chăm sóc khách hàng và đánh giá mức độ hài lòng;</p>
                    <p style="text-align: justify;">Quản lý chính sách kinh doanh: quản lý thiết lập các chính sách giá theo nhu cầu linh hoạt của kinh doanh; quản lý phát hành, lưu hành, sử dụng voucher do được phát hành từ Doanh nghiệp hoặc từ đối tác pên kết;</p>
                </div>

                <p style="text-align: left;"><strong>5. Quản lý sản xuất</strong></p>

                <div style="text-align: left;">
                    <p>Quản lý kế hoạch sản xuất.</p>
                    <p>Quản lý các lệnh sản xuất.</p>
                    <p>Quản lý sản phẩm, phế phẩm, sản phẩm phụ.</p>
                    <p>Quản lý định mức nguyên vật liệu.</p>
                    <p>Quản lý quy trình sản xuất.</p>
                    <p>Quản lý nguồn lực sản xuất.</p>
                    <p>Các thống kê, báo cáo linh hoạt</p>
                </div>

                <p style="text-align: left;"><strong>6. Quản lý tiến độ dự án</strong></p>

                <div style="text-align: left;">
                    <p>Quản lý dự án sản xuất và thương mại, được tổ chức từ nhiều nội dung hạng mục công việc cụ thể;</p>
                    <p>Quản lý giao việc và báo cáo kết quả thực hiện và hoàn thành công việc với từng thành viên trong nhóm dự án;</p>
                    <p>Quản lý các vấn đề phát sinh của dự án đến từ nội bộ dự án và các bên pên quan;</p>
                </div>

                <p style="text-align: left;"><strong>7. Quản lý mua hàng</strong></p>

                <div style="text-align: left;">
                    <p>Quản lý nhà cung cấp: quản lý thông tin, lịch sử pên hệ với các nhà cung cấp.</p>
                    <p>Quản lý sản phẩm: thông tin sản phẩm, thuộc tính sản phẩm.</p>
                    <p>Quản lý các hoạt động mua hàng: yêu cầu chào giá, đơn mua hàng, nhập kho, kiểm soát hóa đơn</p>
                    <p>Quản lý chính sách giá: áp dụng giá linh hoạt tùy theo các khách hàng, các dòng sản phẩm, các chương trình khuyến mại…</p>
                    <p>Các thống kê, báo cáo linh hoạt.</p>
                </div>

                <p style="text-align: left;"><strong>8. Quản lý bán hàng</strong></p>

                <div style="text-align: left;">
                    <p style="text-align: justify;">Quản lý khách hàng: quản lý thông tin, lịch sử pên hệ với khách hàng.</p>
                    <p style="text-align: justify;">Quản lý đội ngũ bán hàng: quản lý cá nhân và các nhóm/đội bán hàng.</p>
                    <p style="text-align: justify;">Quản lý sản phẩm: thông tin sản phẩm, thuộc tính sản phẩm.</p>
                    <p style="text-align: justify;">Quản lý các thông tin trước bán hàng: các đầu mối, cơ hội bán hàng.</p>
                    <p style="text-align: justify;">Quản lý các hoạt động bán hàng: báo giá, đơn bán hàng, xuất kho, xuất hóa đơn.</p>
                    <p style="text-align: justify;">Quản lý chính sách giá: áp dụng giá linh hoạt tùy theo các khách hàng, các dòng sản phẩm, các chương trình khuyến mại…</p>
                    <p style="text-align: justify;">Các thống kê, báo cáo linh hoạt</p>
                </div>

                <p style="text-align: left;"><strong>9. Quản lý bán lẻ</strong></p>

                <div style="text-align: left;">
                    <p>Quản lý các hoạt động kinh doanh bán lẻ hàng ngày: Quản lý ca làm việc cá nhân; Quản lý danh sách ca làm việc; Quản lý các đơn hàng bán lẻ.</p>
                    <p>Quản lý sản phẩm: Sản phẩm; Nhóm sản phẩm bán lẻ.</p>
                    <p>Cho phép cấu hình: Điểm bán hàng; Phương thức thanh toán.</p>
                </div>

                <p style="text-align: left;"><strong>10. Kế toán tài chính</strong></p>

                <div style="text-align: left;">
                    <p>Phân hệ kế toán phù hợp cho các doanh nghiệp ở mọi quy mô, có thể cài đặt sử dụng riêng rẽ theo nhu cầu của khách hàng, đặc biệt hiệu quả khi kết nối và tích hợp với nhiều module của VNPT ERP.</p>
                    <p>Phân hệ kế toán của VNPTERP thực hiện đầy đủ các nghiệp vụ kế toán đáp ứng theo đúng quy định và chuẩn mực kế toán hiện hành của VN và đươc VNPT cập nhật kịp thời khi nhà nước thay đổi quy định, chính sách.</p>
                </div>

                <p style="text-align: left;"><strong>11. Tiện ích</strong></p>

                <div style="text-align: left;">
                    <p>Kết nối với tài khoản ngân hàng: Cập nhật sao kê ngân hàng và cân đối chúng chỉ qua vài thao tác dễ dàng</p>
                    <p>Thanh toán nhanh hơn: Tạo và gửi hóa đơn chuyên nghiệp và nhận thanh toán trực tuyến.</p>
                    <p>Tự động hoá theo dõi công nợ</p>
                    <p>Tích hợp với phân hệ bán hàng: Tự động tạo hoá đơn từ phân hệ bán hàng, lệnh giao hàng hoặc căn cứ về thời gian và nguyên liệu, Chi phí hóa đơn vào các dự án cho khách hàng</p>
                    <p>Tích hợp với phân hệ mua hàng: Tạo hoá đơn nhà cung cấp dựa trên đơn đặt hàng. Tạo báo cáo định giá hàng tồn kho thời gian thực</p>
                    <p>Kế toán quản trị: Tích hợp các hoạt động kế toán quản trị với bảng chấm công, các dự án, hóa đơn, chi phí, vv... Không cần phải ghi lại các giao dịch, tất cả các mục phân tích tự động được đăng theo các quy tắc quản trị.</p>
                    <p>Ngoài ra Module này còn duy trì các chức năng cần thiết để quản lý doanh nghiệp như Quản lý tài sản, theo dõi thu chi, kiểm soát ngân sách, kế toán phân tích đa cấp;</p>
                    <p>Hỗ trợ nhiều loại tiền tệ, nhiều người dùng có quyền truy cập khác nhau, nhiều công ty với đối soát theo thời gian thực và kế hoạch phân tích riêng</p>
                </div>

                <p style="text-align: left;">Phân hệ kế toán áp dụng cho các doanh nghiệp hoạt động theo chế độ kế toán VN theo các quy định hiện hành sau:</p>

                <div style="text-align: left;">
                    <p style="text-align: left;">Báo cáo tài chính theo QĐ 15/2006/QD-BTC</p>
                    <p style="text-align: left;">Báo cáo tài chính theo QĐ 48/2006/QD-BTC</p>
                    <p style="text-align: left;">Báo cáo tài chính theo Thông tư 200/2014/TT-BTC</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection