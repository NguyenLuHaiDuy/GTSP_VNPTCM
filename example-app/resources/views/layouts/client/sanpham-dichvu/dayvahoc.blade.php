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
            <h6>Phần mềm hỗ trợ học trực tuyến</h6>
            <h6>Quản lý thông tin chung</h6>
            <h6>Quản trị khoá học</h6>
            <h6>Quản trị thi</h6>
            <h6>Nhóm chức năng cho học viên</h6>
            <h6>Quản trị hệ thống</h6>
            <ul>
                <li class="part-list">Với “Giải pháp đào tạo trực tuyến E-Learning”, các cá nhân, tổ chức đều có thể tự lập ra trường học trực tuyến để tiếp nhận học viên, đào tạo và thu học phí hay cung cấp những bài thi, chứng chỉ như các cơ sở đào tạo khác.</li>
                <li class="part-list">Hệ thống được xây dựng nhằm mục đích giúp doanh nghiệp giải quyết được chi phí đào tạo nguồn lực, khắc phục hạn chế về thời gian, chi phí và nhân sự liên quan</li>
                <li class="part-list">Đưa hệ thống E-Learning vào ứng dụng trong đào tạo nguồn lực là xu hướng phát triển bềnvững của nhiều công ty, tập đoàn lớn trong quá trình hội nhập</li>
            </ul>
            <h6>Phần mềm thi trực tuyến tùy biến</h6>
            <h6>Quản lý ngân hàng câu hỏi</h6>
            <h6>Luyện thi, ôn tập, theo dõi tiến trình Học và thi</h6>
            <h6>Quản lý năng lực Học sinh</h6>
            <h6>Tổ chức thi</h6>
            <h6>Chấm thi</h6>
            <ul>
                <li class="part-list">Nhằm xây dựng một hệ thống mà người giảng viên có thể xây dựng kì thi, người học thực hành thi một cách đơn giản, hiệu quả mang lại kết quả chính xác nhất</li>
            </ul>
            <h6>Mạng xã hội giáo dục cho giáo viên, phụ huynh, học sinh</h6>
            <h6>Quản lý tin bài</h6>
            <h6>Quản lý thông tin chia sẻ, trao đổi</h6>
            <h6>Xây dựng bài viết hướng dẫn về sử dụng vnEdu và các nghiệp vụ giáo dục nói chung</h6>
            <ul>
                Mạng giáo dục Việt Nam vnEdu hiện là một trong những sản phẩm giáo dục uy tín nhất và đang được triển khai rộng khắp trên khắp cả nước, cung cấp rất nhiều tiện ích cho người dùng, cụ thể:
                <li class="part-list">Mang đến một cách thức quản lý mới, khoa học và hiệu quả cho nhà trường.</li>
                <li class="part-list">Giảm tối đa khối lượng công việc thủ công, các thủ tục hành chính trong quản lý.

                </li>
                <li class="part-list">Tránh được sai sót do việc tính toán thủ công: Hệ thống sẽ tự động tổng hợp số học lực, hạnh kiểm,... tuân theo các quy định của bộ giáo dục ban hành</li>
                <li class="part-list">Cung cấp một cách chính xác về các số liệu báo cáo. vnEdu tích hợp sẵn các mẫu báo cáo thống kê EMIS theo các giai đoạn của năm học, các mẫu báo cáo về hồ sơ và điểm của học sinh tương thích với phân hệ quản lý học sinh VEMIS và quản lý điểm.</li>
                <li class="part-list">Giúp nhà trường chủ động hơn trong việc in ấn một số mẫu sổ gọi tên và ghi điểm, mẫu sổ theo dõi và đánh giá học sinh tiểu học,…</li>
                <li class="part-list">Hỗ trợ chức năng quản lý, tạo kỳ thi trắc nghiệm online, tự động đánh số báo danh, thời khoá biểu,… một cách nhanh chóng.</li>
                <li class="part-list">Tích hợp chức năng thông báo điểm, kết quả học tập rèn luyện của học sinh trên website, thông qua hệ thống tin nhắn giúp phụ huynh dễ dàng nắm bắt tình hình học tập, rèn luyện của con em mình.</li>
                <li class="part-list">Là nơi chia sẻ, trao đổi những kinh nghiệm và các đóng góp thiết thực liên quan đến công tác soạn bài giảng.</li>
            </ul>
            <h6>Phần mềm soạn thảo bài giảng</h6>
            <ul>
                <li class="part-list">Công cụ giúp giáo viên soạn các bài giảng điện tử theo nhiều chuẩn: SCORM, Powerpoint, …</li>
            </ul>
            <h6>Phần mềm hỗ trợ chấm thi trắc nghiệm bằng phiếu thi trực tiếp</h6>
            <h6>Quản lý mẫu đề thi</h6>
            <h6>Quản lý bài thi</h6>
            <h6>Chấm thi</h6>
            <h6>Xuất kết quả thi</h6>
            <h6>Thống kê, báo cáo </h6>
            <ul>
                <li class="part-list">Phần mềm hỗ trợ chấm thi trực tuyến bằng phiếu thi trực tiếp giúp giảm thiểu công sức của việc chấm thi, đảm bảo độ chính xác và tính minh bạch trong kì thi

                </li>
            </ul>
            <h6>Phần mềm Kho dữ liệu bài giảng điện tử</h6>
            <h6>Quản lý Thống kê báo cáo</h6>
            <h6>Quản lý tương tác mini game của Học sinh</h6>
            <h6>Quản lý điểm số và bài Học của Học sinh</h6>
            <h6>Đưa ra đánh giá về học sinh và nhận xét đối với bài làm
            </h6>
        </section>
    </div>
</body>

</html>
@endsection