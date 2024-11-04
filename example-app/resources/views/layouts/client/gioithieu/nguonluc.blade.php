@extends('layouts.master')
@section('contents')
@section('title','Nguồn lực')
<style>
    .SingleArticle {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .SingleArticle .title {
        font-size: 28px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 20px;
        text-align: center;
    }

    .SingleArticle .detail {
        font-size: 16px;
        color: #333;
        line-height: 1.6;
    }

    .SingleArticle p {
        margin: 0 0 10px;
    }

    .SingleArticle p span {
        color: #000;
    }

    .SingleArticle ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .SingleArticle ul li {
        margin: 0 0 10px;
        padding: 0;
        font-size: 16px;
        color: #333;
        line-height: 1.6;
    }

    .SingleArticle .UISocialShare {
        margin-top: 20px;
        text-align: center;
    }

    .SingleArticle .UISocialShare div {
        display: inline-block;
        margin: 0 5px;
    }

    .SingleArticle .UISocialShare iframe {
        border: none;
    }
</style>
<div class="SingleArticle">
    <div></div>
    <div class="title">Thư gửi khánh hàng và đối tác </div>
    <div></div>
    <p class="detail">
    </p>
    <p style="color: rgba(27, 25, 25, 1); margin: 0 0 10px; padding: 0; border: 0; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0"><strong style="padding: 0; border: 0">Kính gửi Quý khách hàng và đối tác,</strong></span></p>
    <p style="color: rgba(27, 25, 25, 1); margin: 0 0 10px; padding: 0; border: 0; text-align: justify; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0">Tập đoàn Bưu Chính Viễn Thông Việt Nam VNPT là tập đoàn hàng đầu Việt Nam trong lĩnh vực viễn thông và công nghệ thông tin. Thương hiệu VNPT IT được xếp hạng TOP 10 thương hiệu mạnh nhất, giá trị nhất Việt nam (Brand Finance - 2016).</span></p>
    <p style="color: rgba(27, 25, 25, 1); margin: 0 0 10px; padding: 0; border: 0; text-align: justify; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0">Công ty công nghệ thông tin VNPT IT là đơn vị mũi nhọn của VNPT trong việc nghiên cứu, phát triển các giải pháp phần mềm, đã dành nhiều giải thưởng quốc gia uy tín trong lĩnh vực công nghệ thông tin như: giải thưởng Sao khuê, giải thưởng Nhân Tài Đất Việt… Công ty công nghệ thông tin&nbsp;VNPT đang cung cấp các sản phẩm, dịch vụ cho nhiều tổ chức, bộ ngành, doanh nghiệp của quốc gia như: Cổng thông tin chính phủ; Website Đảng cộng sản Việt nam; Cổng dữ liệu Bộ Y tế; Bộ thông tin truyền thông...</span></p>
    <p style="color: rgba(27, 25, 25, 1); margin: 0 0 10px; padding: 0; border: 0; text-align: justify; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0">Công ty công nghệ thông tin VNPT tập trung chính vào các nhóm sản phẩm, dịch vụ phần mềm phục vụ:</span></p>

    <ul style="color: rgba(27, 25, 25, 1); margin: 0; padding: 0; border: 0; list-style-type: none; list-style-image: initial">
        <li style="margin: 0; padding: 0; border: 0; list-style-type: none; list-style-image: initial; text-align: justify; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0">Nền tảng chính phủ điện tử.</span></li>
        <li style="margin: 0; padding: 0; border: 0; list-style-type: none; list-style-image: initial; text-align: justify; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0">Các bộ, ban, ngành: y tế, giáo dục, tài nguyên môi trường, …</span></li>
        <li style="margin: 0; padding: 0; border: 0; list-style-type: none; list-style-image: initial; text-align: justify; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0">Doanh nghiệp và cộng đồng.</span></li>
    </ul>
    <p style="color: rgba(27, 25, 25, 1); margin: 0 0 10px; padding: 0; border: 0; text-align: justify; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0">Tiếp nối truyền thống, vị thế của tập đoàn viễn thông hàng đầu tại Việt Nam, cùng chiến lược tổng lực trong phát triển dịch vụ công nghệ thông tin của Tập đoàn Bưu chính viễn thông VNPT, chúng tôi tin tưởng sẽ là đối tác tin cậy, lâu dài, sẵn sàng cùng Quý vị trong mọi kế hoạch hiện tại và tương lai.</span></p>
    <p style="color: rgba(27, 25, 25, 1); margin: 0 0 10px; padding: 0; border: 0; text-align: center; line-height: 21px"><span style="color: rgba(0, 0, 0, 1); padding: 0; border: 0"><strong style="padding: 0; border: 0">Trân trọng,<br>
                Công ty công nghệ thông tin VNPT IT</strong></span></p>
    <p></p>
    <div></div>

    <div class="UISocialShare">
        <div class="facebook">
            <div class="fb-share-button fb_iframe_widget" data-href="https://vnptit.vn/nguon-luc" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fvnptit.vn%2Fnguon-luc&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey"><span style="vertical-align: bottom; width: 86px; height: 20px;"><iframe name="faf52462b08a68c97" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfb0b81af126ca157d%26domain%3Dvnptit.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fvnptit.vn%252Ff6e9ff8c1097325a8%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fvnptit.vn%2Fnguon-luc&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey" style="border: none; visibility: visible; width: 86px; height: 20px;" class=""></iframe></span></div>
        </div>
        <div class="twitter">
            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 88px; height: 20px;" title="X Post Button" src="https://platform.twitter.com/widgets/tweet_button.2f70fb173b9000da126c79afe2098f02.vi.html#dnt=false&amp;id=twitter-widget-0&amp;lang=vi&amp;original_referer=https%3A%2F%2Fvnptit.vn%2Fnguon-luc&amp;size=m&amp;text=Ngu%E1%BB%93n%20l%E1%BB%B1c&amp;time=1726586626653&amp;type=share&amp;url=https%3A%2F%2Fvnptit.vn%2Fnguon-luc" data-url="https://vnptit.vn/nguon-luc"></iframe>
        </div>
        <div class="zalo-share-button" data-href="https://vnptit.vn/nguon-luc" data-oaid="579745863508352884" data-customize="false" data-layout="1" data-color="blue" style="position: relative; display: inline-block; width: 70px; height: 20px;"><iframe id="260b22aa-e5e5-4c26-b041-65b41929b5f3" name="260b22aa-e5e5-4c26-b041-65b41929b5f3" frameborder="0" allowfullscreen="" scrolling="no" width="70px" height="20px" src="https://button-share.zalo.me/share_inline?id=260b22aa-e5e5-4c26-b041-65b41929b5f3&amp;layout=1&amp;color=blue&amp;customize=false&amp;width=70&amp;height=20&amp;isDesktop=true&amp;url=https%3A%2F%2Fvnptit.vn%2Fnguon-luc&amp;d=eyJ1cmwiOiJodHRwczovL3ZucHRpdC52bi9uZ3Vvbi1sdWMifQ%253D%253D&amp;shareType=0" style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe></div>
    </div>
</div>
@endsection
