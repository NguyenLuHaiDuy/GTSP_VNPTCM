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
            align-items: center;
            background-image: url('https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/imgpharmacy.png');
            padding: 50px;
            height: 400px;
            color: #0066b3;
        }

        .content {
            flex: 1;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 15px;
            line-height: 1.6;
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

        .container .diagram img {
            max-width: 100% !important;
            /* Thêm !important để chắc chắn rằng nó được ưu tiên */
            height: auto !important;
        }
        .description-section h5 {
            text-align: center;
        }
        .diagram-section p {
            font-size: 1rem;
        }
    </style>

    <div class="container">
        <section class="hero-section">
            <div class="content">
                <h1>VNPT PHARMACY</h1>
                <h3>Phần mềm quản lý nhà thuốc</h3>
                <p>Dễ dàng sử dụng</p>
                <p>Đáp ứng nghiệp vụ</p>
                <div class="buttons">
                    <a href="#" class="btn btn-try">Dùng thử</a>
                    <a href="#" class="btn btn-price">Bảng giá</a>
                </div>
            </div>
            <div class="image">
                <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/banner/logopharmacy.png" alt="Logo Cổng Thông Tin Điện Tử">
            </div>
        </section>
        <section class="description-section">
            <h3>Giới thiệu</h3>

            <h5>GIẢI PHÁP QUẢN LÝ BÁN THUỐC KÊ ĐƠN CỦA TRUNG TÂM eHEALTH</h5>
            <div class="giua">
                <p>
                    Cuộc sống hiện đại ngày nay, bên cạnh các yếu tố tích cực của xã hội như chất lượng cuộc sống của người dân ngày càng được đề cao, vẫn còn tồn tại nhiều bất cập trong công tác chăm sóc sức khỏe cộng đồng. Nhiều loại bệnh tật vẫn gia tăng và đe dọa đến sức khỏe con người. Một bộ phận không nhỏ người bệnh lạm dụng, tự ý sử dụng thuốc đặc biệt là thuốc kháng sinh. Chỉ có 23% số bệnh nhân sử dụng thuốc kháng sinh đúng quy trình. Hơn nữa nhiều người bệnh sử dụng thuốc kháng sinh nhiều và kéo dài, dẫn đến tỷ lệ khách thuốc kháng sinh là đáng lo ngại.
                </p>
                <p>Với các nhà thuốc, thông thường do áp lực của doanh thu mà phần lớn thuốc được bán không theo đơn của bác sĩ, theo thống kê có đến 88% tại thành thị và 91% tại nông thôn, các thuốc kháng sinh được bán cho người dùng không theo đơn thuốc.</p>
                <p>
                    Thực tế cho thấy tại các cơ sở y tế vẫn tồn tại tình trạng kê đơn thuốc điều trị ngoại trú quá nhiều cho một đơn thuốc. Trung bình 3,3-3,8 thuốc/đơn, trong đó 49,2% là thuốc kháng sinh (60% đối với tuyến Huyện/Xã, 40% đối với tuyến tỉnh và 30% đối với tuyến trung ương).
                    Trong khi đó thông tin bệnh nhân, nội dung hướng dẫn chưa đầy đủ có nhiều sai sót.
                </p>
                <p>
                    Trước tình hình có nhiều lo ngại như thế Ngày 25 tháng 10 năm 2017, tại hội nghị nghị lần thứ sáu Ban chấp hành trung ương khóa XII đã ra NGHỊ QUYẾT SỐ 20-NQ/TW NGÀY 25/10/2017 về tăng cường công tác bảo vệ, chăm sóc và nâng cao sức khỏe nhân dân trong tình hình mới. Đây là một chủ trương lớn của Đảng nhằm khắc phục các thực trạng nêu trên, chấn chỉnh và cải tiến công tác chăm sóc sức khỏe người dân.
                </p>
                <p>Từ đó, bộ Y tế cũng ban hành các văn bản hướng dẫn thực hiện quy chế kê đơn thuốc trong điều trị ngoại trú, hướng dẫn thực hiện quản lý sử dụng kháng sinh trong bệnh viện, xây dựng đề án tăng cường kiểm soát kê đơn thuốc và bán thuốc kê đơn giai đoạn 2017-2020 và quy định việc ban hành và đánh giá việc đáp ứng Thực hành tốt cơ sở bán lẻ thuốc.</p>
                <p>
                    Giải pháp phần mềm quản lý bán thuốc kê đơn của đội dự án thuộc Trung tâm Giải pháp Y tế điện tử đã được thực hiện đảm bảo tạo nên một mảnh ghép lớn trong hệ sinh thái công nghệ thông tin trong ngành Y tế.
                </p>
                <p>Giải pháp phần mềm này là một công cụ đắc lực hỗ trợ bộ Y tế quản lý, kiểm soát quá trình kê đơn và bán thuốc tại các cơ sở khám chữa bệnh và nhà thuốc theo đúng quy định của ngành Y tế. Đảm bảo khắc phục được các tồn tại của việc kê đơn quá nhiều thuốc kháng sinh cho một đơn thuốc, khắc phục tình trạng không quản lý được đơn thuốc, giá thuốc.</p>
                <p>
                    Giải pháp của Trung tâm eHEALTH còn cho phép người bệnh tự nâng cao nhận thức về việc sử dụng thuốc một cách an toàn, đúng quy trình, từng bước giảm thiểu tình trạng lạm dụng thuốc kháng sinh hoặc kháng thuốc kháng sinh. Người bệnh cũng được tự do lựa chọn cơ sở khám bệnh có uy tín, chất lượng và giá thành minh bạch và cạnh tranh
                </p>
                <p>Khi giải pháp phần mềm này được nhân rộng, sẽ làm tăng tỷ lệ tuân thủ quy định về kê đơn và bán thuốc theo đơn.

                </p>

                <p>Mô hình quy trình phân phối và bán thuốc được khái quát như sau:

                </p>
                <div class="diagram">
                    <img src="https://storage-vnportal.vnpt.vn/vnpt-it/6180/FileQuanTriTinTuc/so-do-pharpngok638442122530444706.png" alt="Khung chính phủ điện tử">
                </div>
                <p>Tại các cơ sở y tế, bệnh viện, phòng khám tư nhân sẽ tiếp nhận bệnh nhân và thực hiện khám bệnh. Hệ thống quản lý kê đơn thuốc sẽ gửi dữ liệu về hệ thống kiểm soát bán thuốc kê đơn. Nơi đây, hệ thống quản lý sẽ xem xét việc kê đơn đã đúng các quy định chưa và liên thông với các nhà thuốc trên địa bàn cũng như các kho thuốc, nhà phân phối thuốc để thực hiện các công việc theo chức năng của mình.</p>
                <p>Người dân được quyền lựa chọn các nhà thuốc phù hợp với mình, đơn thuốc được các bên liên quan kiểm soát đảm bảo đúng giá trị pháp lý và minh bạch về giá cả và việc thực hiện được hoàn tất.</p>
                <p>
                    Đây là một giải pháp cho phép liên thông với các phần mềm quản lý bệnh viện VNPT HIS, phần mềm quản lý nhà thuốc VNPT Pharmacy đảm bảo việc bán thuốc, kê đơn được thực hiện một cách hoàn hảo theo đúng quy định của nhà nước và nhu cầu chính đáng của người dân.


                </p>

                <p>Giải pháp phần mềm Quản lý bán thuốc kê đơn của Trung tâm Giải pháp y tế điện tử đã được triển khai tại toàn tỉnh Vĩnh Phúc và đạt được nhiều kết quả tốt đẹp. Đây là một bước tiến quan trọng để giải pháp phần mềm này sẽ tiếp tục triển khai phủ rộng ra các tỉnh toàn Quốc trong năm 2018 và 2019 sắp tới./.



                </p>

            </div>



        
        </section>
    </div>
</body>

</html>

@endsection