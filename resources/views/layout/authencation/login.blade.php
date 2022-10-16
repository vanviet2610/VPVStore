@extends('layouts_master.user_master')

@section('title')
    <title>Đăng Nhập</title>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">
                <div class="card-header p-4 bg-primary">
                    <h4 class="text-white text-center mb-0 mt-0">VPVStore Login</h4>
                </div>
                <div class="card-body">
                    <form onsubmit="return validate()" method="POST" action="{{ route('login') }}" class="p-2">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="emailaddress">Email Address :</label>
                            <input class="form-control" type="t" id="email" placeholder="john@deo.com">
                            <span class="text-danger ml-2" id="errors-email"></span>
                        </div>

                        <div class="form-group mb-3">
                            <div class="hide-pass">
                                <label for="password">Password :</label>
                                <i class="fas fa-eye hide" id="icon-pass"></i>
                                <input class="form-control" type="password"id="password" placeholder="Enter your password">
                            </div>
                            <span class="text-danger ml-2" id="errors-password"></span>
                        </div>

                        <div class="form-group mb-3">
                            <label for=""></label>
                            <a href="pages-recoverpw.html" class="text-muted float-right">Quên mật khẩu?</a>
                        </div>

                        <div class="form-group text-center mb-4">
                            <div class="col-12">
                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                    type="submit">Đăng nhập</button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted mb-0">Tôi chưa có tài khoản người dùng? <a
                                        href="{{ route('showRegister') }}" class="text-dark m-l-5"><b>Đăng ký</b></a></p>
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

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#password').keyup(function(e) {
                if ($(this).val() === '') {
                    $('#icon-pass').addClass('hide');
                } else {
                    $('#icon-pass').removeClass('hide');
                    $('#password').removeClass('is-invalid');

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
        });


        function validate() {
            if ($('#email').val() === "") {
                $('#errors-email').html("Email không được để trống");
                $('#email').addClass('is-invalid');
                return false;
            } else {
                $('#errors-email').html("");
                $('#email').removeClass('is-invalid');

            }

            if ($('#password').val() === "") {
                $('#errors-password').html("Mật khẩu không được để trống");
                $('#password').addClass('is-invalid');
                return false;

            } else {
                $('#errors-password').html("");
                $('#password').removeClass('is-invalid');

            }
            return true;
        }
    </script>
@endpush()
