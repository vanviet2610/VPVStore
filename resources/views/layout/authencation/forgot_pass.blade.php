@extends('layouts_master.user_master')

@section('title')
    <title>forgot PW</title>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">
                <div class="card-header text-center p-4 bg-primary">
                    <h4 class="text-white mb-0 mt-0">VPVStore</h4>
                    <h5 class="text-white font-13 mb-0">Lấy lại mật khẩu</h5>
                </div>
                <div class="card-body">
                    <form action="#" class="p-2">

                        <p class="text-muted text-center mb-4">Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn một
                            email kèm theo hướng dẫn để đặt lại mật khẩu của bạn. </p>

                        <div class="form-group mb-0">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Enter Email">
                                <span class="input-group-append"> <button type="submit"
                                        class="btn btn-primary">Gửi Email</button> </span>
                            </div>

                        </div>
                    </form>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
@endsection
