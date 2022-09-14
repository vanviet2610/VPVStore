@extends('layouts_master.user_master')

@section('title')
    <title>Đăng ký</title>
@endsection


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">
                <div class="card-header text-center p-4 bg-primary">
                    <h4 class="text-white mb-0 mt-0">VPVStore</h4>
                    <h5 class="text-white font-13 mb-0">Tạo người dùng</h5>
                </div>
                <div class="card-body">
                    <form action="#" class="p-2">

                        <div class="form-group mb-3">
                            <label for="emailaddress">Email :</label>
                            <input class="form-control" type="email" id="emailaddress" required=""
                                placeholder="john@deo.com">
                        </div>

                        <div class="form-group mb-3">
                            <div class="hide-pass">
                                <label for="password">Password :</label>
                                <i class="fas fa-eye hide" id="icon-pass"></i>
                                <input class="form-control" type="password" id="password"
                                    placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="hide-pass">
                                <label for="password">Confirm Password :</label>
                                <i class="fas fa-eye hide" id="icon-passconfirm"></i>
                                <input class="form-control" type="password" id="password-confirm"
                                    placeholder="Enter your confirm password">
                            </div>
                        </div>

                        <div class="form-group text-right mt-4 mb-4">
                            <div class="col-12">
                                <button class="btn btn-md btn-primary waves-effect waves-light" type="submit">Đăng
                                    ký</button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-12 text-center">
                                <a href="pages-login.html">Bạn đã có tài khoản người dùng</a>
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
    <!-- end row -->
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#password').keyup(function(e) {
                if ($(this).val() === '') {
                    $('#icon-pass').addClass('hide');
                } else {
                    $('#icon-pass').removeClass('hide');
                }
            });

            $('#password-confirm').keyup(function(e) {
                if ($(this).val() === '') {
                    $('#icon-passconfirm').addClass('hide');
                } else {
                    $('#icon-passconfirm').removeClass('hide');
                }
            });

            $('#icon-pass').click(function(e) {
                e.preventDefault();
                if ($('#password').attr('type') == 'password') {
                    $(this).removeClass('fa-eye').addClass('fa-eye-slash');
                    $('#password').attr('type', 'text');
                } else {
                    $(this).removeClass('fa-eye-slash').addClass('fa-eye');
                    $('#password').attr('type', 'password');

                }
            });
            $('#icon-passconfirm').click(function(e) {
                e.preventDefault();
                if ($('#password-confirm').attr('type') == 'password') {
                    $(this).removeClass('fa-eye').addClass('fa-eye-slash');
                    $('#password-confirm').attr('type', 'text');
                } else {
                    $(this).removeClass('fa-eye-slash').addClass('fa-eye');
                    $('#password-confirm').attr('type', 'password');

                }
            });
        });
    </script>
@endpush
