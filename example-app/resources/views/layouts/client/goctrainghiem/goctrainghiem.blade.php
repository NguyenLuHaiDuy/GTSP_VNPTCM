@extends('layouts.master')
@section('contents')
<section class="volunteer-section section-padding" id="section_4">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-12 mx-auto">
                <h2 class="text-white mb-4 text-center">Đăng Ký Sử Dụng Dịch Vụ</h2>

                <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="Họ Tên" required>
                        </div>

                        <div class="col-lg-6 col-12">    
                            <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="col-lg-12 col-12">
                            <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="SĐT" required>
                        </div>
                        <div class="col-lg-12 col-12">
                            <input type="file" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Tệp đính kèm" required>
                        </div>
                    </div>

                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Nội dung"></textarea>

                    <button type="submit" class="form-control">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection