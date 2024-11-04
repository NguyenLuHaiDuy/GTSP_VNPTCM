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
        .part-list{
            color:black;
            list-style-type: none;
        }
    </style>

    <div class="container">
        <section class="description-section">
            
            <h3>Giới thiệu</h3>
            <ul><h5>Hệ thống quản lý thông tin nhà trường vnEdu</h5>
            <li class="part-list">Quản lý Giáo viên</h5></li>
            <li class="part-list">Quản lý Học sinh</h5></li>
            <li class="part-list">Quản lý hồ sơ điện tử</h5></li>
            <li class="part-list">Th6ng kê báo cáo</h5></li>
            <li class="part-list">Tin nhắn điều hành, sổ liên lạc</h5></li>
            <li class="part-list">Các phần mềm tiện ích</h5></li>
        <p>Hệ thống Quản lý trường học vnEdu là phần mềm quản lý giáo dục được Tập đoàn Bưu chính viễn thông Việt Nam triển khai và áp dụng cho Nhà trường, Phòng Giáo dục, Sở Giáo dục thực hiện các nghiệp vụ quản lý: Giáo viên, Học sinh, Kết quả học tập, Cơ sở vật chất, Quản lý tài sản, Các báo cáo thống kê... Phần mềm quản lý vnEdu được xây dựng trên nền tảng điện toán đám mây, cho phép quản lý tập trung dữ liệu, xử lý linh hoạt, đáp ứng nhu cầu liên thông CSDL ngành.</p>
        </ul>
            <ul><h5>Phần mềm quản lý dinh dưỡng</h5>
            <li class="part-list">Quản lý thực đơn</li>
            <li class="part-list">Quản lý kho</li>
            <li class="part-list">Báo cáo thống kê</li>
            <li class="part-list">Danh mục</li>
            <li class="part-list">Hệ thống</li>
            <p>Phần mềm Quản lý dinh dưỡng là một phần mềm chuyên dụng hỗ trợ cán bộ dinh dưỡng trong các trường học xây dựng các thực đơn dinh dưỡng cho các bữa ăn tại nhà trường phù hợp các trường mầm non cũng như các trường cung cấp dịch vụ bán trú. Dinh dưỡng được thiết lập phù hợp với sự phát triển cân đối của trẻ theo từng độ tuổi, với những tiêu chí quy định của Bộ giáo dục và đào tạo và Viện dinh dưỡng bao gồm:Tỷ lệ các thành phần dinh dưỡng calo; chất đạm; chất béo; chất bột đường và các chất vi lượng khác</p>
        
        
        
        </ul>
        <ul><h5>Phần mềm quản lý thu phí</h5>
            <li class="part-list">Quản lý ngày học</li>
            <li class="part-list">Danh mục phí, dịch vụ</li>
            <li class="part-list">Cấu hình giảm trừ</li>
            <li class="part-list">Đăng ký dịch vụ tự chọn</li>
            <li class="part-list">Đăng ký học thứ 7</li>
            <li class="part-list">Điểm danh sử dụng dịch vụ trong tháng</li>
            <li class="part-list">Các khoản thu khác</li>
            <li class="part-list">Tính chi phí tháng</li>
            <li class="part-list">Phân quyền</li>
            <li class="part-list">Thống kê báo cáo</li>
            <li class="part-list">Thông tin bản quyền</li>
            <p>Nhằm mang thêm tiện ích cần có cho nhà trường cũng như giáo viên trong việc quản lý thu phí các dịch vụ trong trường học, VNPT đã phát triển và đưa ra phần mềm Quản lý thu phí phục vụ các nghiệp vụ thu phí của nhà trường.</p>
        </ul>
        <ul><h5>Cổng thông tin điện tử nhà trường</h5>
            <li class="part-list">Tính năng quản lý cây tổ chức của đơn vị</li>
            <li class="part-list">Tính năng quản lý Người dùng</li>
            <li class="part-list">Tính năng quản lý phân quyền: Phân quyền tới từng chức năng</li>
            <li class="part-list">Tính năng quản lý Website: Quản lý site, Quản lý Giao diện(Layout/theme), Quản lý Tin bài, Quản lý Chuyên mục (Xuất bản, đồng xuất bản...), Quản lý quảng cáo, Quản lý phản hồi, Quản lý file đơn vị,Thống kê truy cập..</li>
            <p>Cổng thông tin điện tử nhà trường là nơi giao tiếp giữa nhà trường với các đơn vị ngành dọc giáo dục và đến với phụ huynh, học sinh. Cổng thông tin là bức tranh cơ bản về trường học khi tham khảo trực tuyến</p>
        </ul>
        <ul><h5>Phần mềm Sổ liên lạc điện tử và tin nhắn điều hành</h5>
            <li class="part-list">Tin nhắn thông báo chung</li>
            <li class="part-list">Tin nhắn thông báo riêng</li>
            <li class="part-list">Tin nhắn SMS định kì</li>
            <li class="part-list">Tin nhắn điều hành</li>
            <li class="part-list">Tin nhắn gửi theo nhóm</li>
            <li class="part-list">Cấu hình và phân quyền gửi tin nhắn</li>
            <li class="part-list">Lịch sử gửi tin nhắn</li>
            <p>Nhằm đáp ứng nhu cầu trao đổi liên lạc giữa phụ huynh và giáo viên, giữa nội bộ cơ sở giáo dục, và công cuộc số hoá ngành giáo dục, VNPT phát triển tính năng Sổ liên lạc điện tử và tin nhắn điều hành</p>
        </ul>
        </section>
    </div>
</body>

</html>
@endsection