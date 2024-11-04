@extends('layouts.master')
@section('contents')
@section('tilte','Ban Tổng Giám Đốc')<!DOCTYPE html>
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

        .description-section,
        .diagram-section {
            margin-bottom: 40px;
        }

        .description-section p,
        .diagram-section p {
            line-height: 1.6;
            color: #333;
            margin-bottom: 15px;
            font-size: 1.2rem;
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
    </style>

    <div class="container">
        <section class="description-section">
            
            <h3>Giới thiệu</h3>
            <p>Nền tảng tích hợp và chia sẻ dữ liệu (VNPT VXP)</p>
            <p>Nền tảng chia sẻ và tích hợp dữ liệu VNPT VXP đóng vai trò trung tâm trong kiến trúc Chính phủ điện tử 2.0. Hệ thống là cầu nối giúp các phần mềm tích hợp và chia sẻ dữ liệu với nhau, theo các tiêu chuẩn chung về định dạng gói tin, đảm bảo tính an toàn và xác thực thông tin.</p>
            <div class="diagram">
            <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/VNPT%20-%20Truc%20lien%20thong%20-%20VXP638441275147312353.jpg" alt="Khung chính phủ điện tử">
            </div>
            <div class="mbt" style="background: rgba(0, 0, 0, 0); width: 970px; margin: 0; padding: 30px 30px 0; border-top: 1px solid rgba(231, 231, 231, 1); border-right: 0; border-bottom: 0; border-left: 0; line-height: 1.3em">
<div id="moredetailcontent" style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px">
<h5 style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; font-size: 18px">Các chức năng chính</span></h5>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Liên thông với các cơ sở dữ liệu quốc gia về: Bảo hiểm xã hội, Thông tin đăng kí doanh nghiệp, Cơ sở dữ liệu Hộ tịch và Lý lịch tư pháp của bộ Tư pháp, Cơ sở dữ liệu dân cư, Cơ sở dữ liệu quốc gia, Hệ thống cấp mã số ngân sách, Hệ thống văn bản quy phạm pháp luật, Hệ thống bưu chính Vnpost, Hệ thống danh mục dùng chung, Cổng thanh toàn quốc gia Paygov… qua NGSP.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Liên thông dữ liệu văn bản theo QCVN EdXML 102:2016/BTTTT, liên thông với Trục Liên Thông Văn bản Quốc gia.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Liên thông xử lý hồ sơ hành chính công giữa các hệ thống công nghệ thông tin trong Tỉnh/Bộ.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Liên thông với Cổng dịch vụ công quốc gia, cập nhật tiến độ xử lý hồ sơ hành chính, khai báo thông tin khuyến mại, thuế đất, thanh toàn trực tuyến.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Cung cấp hệ thống định danh xác thực cho người dùng khi xử dụng các hệ thống công nghệ thông tin.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Thống kê, giám sát và cảnh báo an toàn hệ thống…</span></p>
<h5 style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; font-size: 18px">Đặc điểm, công nghệ nổi bật</span></>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Sản phẩm phát triển trên mô hình microservice dễ mở rộng và nâng cấp, khả năng chịu tải cao.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Đảm bảm và đáp ứng theo mô hình kiến trục bảy thành phần của cục Tin học hóa gồm: Trục tích hợp, API Gateway, Hệ thống xác thực tập trung, Hệ thống giám sát, Hệ thống quản lý ứng dụng và cấp phát tài nguyên truy cập, Hệ thống xử lý quy trình nghiệp vụ BPM.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Cung cấp đẩy đủ các dịch vụ chính như: Liên thông với NGSP trong mạng cpnet, liên thông với trục VDXP, Trục liên thông văn bản quốc gia, Liên thông đẩy đủ với các cơ sở dữ liệu quốc gia….</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Các thành phần được thiết kế và sử dụng độc lập, nhưng lại gắn kết theo kiến trục SOA.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="background-color: rgba(0, 0, 0, 0); padding: 0; border: 0; font-size: 18px">❖ Quản lý thống nhất và tập trung trên hệ thống LGSP Admin.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Triển khai linh hoạt đa dạng môi trường: trên Dc của các tỉnh, trên môi trường cloud của VNPT</span></>
<h5 style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; font-size: 18px">Lợi ích dịch vụ</span></>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ VNPT VXP là nền tảng đóng vai trò trung tâm trong kiến trúc chính phủ điện tử 2.0, góp phần xây dựng nền móng hạ tầng số.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Giúp kết nối tích hợp chia sẻ giữ liệu giữa các phần mềm, rút ngắn thời gian và nhân lực trong quá trình kết nối các hệ thống tin an toàn và bảo mật.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Tạo ra các chuẩn bản tin kết nối, giám sát và bắt buộc các hệ thống tham gia theo tiêu chuẩn chung thúc đẩy quá trình số hóa, giúp kiến tạo tài nguyên số.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Hệ thống được đầu tư tập trung và sử dụng lâu dài tránh đầu tư kết nối nhiều lần chồng chéo gây mất an toàn thông tin.</span></p>
<h5 style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; font-size: 18px">&nbsp;Giải thưởng</span></>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Giải vàng hạng mục Giải pháp tích hợp tại Stevie Awards International Business 2019</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Giải Bạc hạng mục sản phẩm công nghệ dành cho chính phủ tại IT World Awards 2020</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="font-size: 18px">❖ Giải thưởng hệ thống chuyển đổi số tiêu biểu của hiệp hội an toàn thông tin năm 2021.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; font-size: 18px"><span style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0">Giá dịch vụ:</span>&nbsp;được xác định sau khi VNPT tiến hành khảo sát và làm rõ nhu cầu cụ thể của khách hàng.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><span style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; font-size: 18px">Qúy khách vui lòng liên hệ &nbsp;tổng đài Miễn cước 18001260 hoặc Trung tâm kinh doanh VNPT Tỉnh/TP để biết thêm chi tiết.</span></p>
<p style="background: rgba(0, 0, 0, 0); margin: 0; padding: 0; border: 0; line-height: 20px"><strong style="padding: 0; border: 0"><a href="https://vnptit.vn/documents/20194/0/3.+Catalogue_VNPT_VXP_2024.pdf/51914249-c6e8-4a9a-aa51-59f42388820f" style="color: inherit; background-color: rgba(0, 0, 0, 0); padding: 0; border: 0 ; text-decoration: none;"><span style="padding: 0; border: 0; color: rgba(0, 0, 255, 1); font-size: 18px">Link download Catalogue sản phẩm</span></a></strong></p>
</div>
</div>
            

        </section>
    </div>
</body>

</html>
@endsection