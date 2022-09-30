@extends('layouts_master.manager_master')
@section('title')
    <title>Profile</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('manager/css/product.css') }}">
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="profile-bg-picture"
                        style="background-image:url('{{ asset('manager/image/bg-profile.jpg') }}')">
                        <span class="picture-bg-overlay"></span>
                        <!-- overlay -->
                    </div>
                    <!-- meta -->
                    <div class="profile-user-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="profile-user-img"><img src="{{ asset('manager/image/bg-profile.jpg') }}"
                                        alt="" class="avatar-lg rounded-circle"></div>
                                <div class="">
                                    <h4 class="mt-5 font-18 ellipsis"> Phan Văn Việt</h4>
                                    <p class="font-13"> 090805060505</p>
                                    <p class="text-muted mb-0"><small>California, United States</small></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-right">
                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-account-settings-variant mr-1"></i> Khóa Tài khoản
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>
            <!-- end row -->

            <div class="row mt-4">
                <div class="col-sm-12">
                    <div class="card p-0">
                        <div class="card-body p-0">
                            <ul class=" nav nav-tabs tabs-bordered nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#aboutme">Thông
                                        Tin</a>
                                </li>
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product">Danh sách
                                        Sản
                                        Phẩm</a></li>
                            </ul>

                            <div class="tab-content m-0 p-4">
                                <div id="aboutme" class="tab-pane ">
                                    <div class="profile-desk">
                                        <h5 class="text-uppercase font-weight-bold">Thông tin thêm</h5>
                                        <div class="row">
                                            <div class="col-4">
                                                Mô tả
                                            </div>
                                            <div class="col-8">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <i class="fas fa-star"></i>
                                                        <span class="ml-1">Đánh giá: </span>
                                                    </div>
                                                    <div class="col-4">
                                                        <i class="fas fa-store"></i>
                                                        <span class="ml-1">Tổng số:
                                                    </div>
                                                    <div class="col-4">
                                                        <i class="fas fa-user-check"></i>
                                                        <span class="ml-1">Tham gia:</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end profile-desk -->
                                </div> <!-- about-me -->

                                <!-- Activities -->
                                <div id="product" class="tab-pane active">

                                    <div class="row">
                                        <div class="col-3">
                                            <span>Sắp Xếp </span>
                                        </div>
                                        <div class="col-3 ">
                                            <select class="form-control-sm" name="sort" id="">
                                                <option value="">Giá: từ thấp đên cao</option>
                                                <option value="">Giá: từ cao đên thấp </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @for ($i = 0; $i < 100; $i++)
                                            <div class="col-sm-4 col-md-3 col-xl-2 mt-2">
                                                <div class="products p-2">
                                                    <div class="product-head">
                                                        <img class="img-products"
                                                            src="{{ asset('clients/images/products/p1.jpg') }}"
                                                            alt="">
                                                        <span class="waiting badge badge-success">Đã duyệt</span>
                                                    </div>
                                                    <div class="product-content">
                                                        <span class="text-product">Văn việt 123123123 Văn việt
                                                            123123123</span>
                                                        <div class="price">
                                                            <span class="text-discount">{{ number_format('2300000') }}
                                                                đ</span>
                                                            <span class="text-price">{{ number_format('2000000.77636362') }}
                                                                đ</span>
                                                        </div>
                                                        <div class="rate">
                                                            <i class="fas fa-star fa-1x "></i>
                                                            <i class="fas fa-star fa-1x"></i>
                                                            <i class="far fa-star fa-1x"></i>
                                                            <i class="far fa-star fa-1x"></i>
                                                            <i class="far fa-star fa-1x"></i>
                                                        </div>
                                                        <div class="text-footer">
                                                            <span class="address">Hà Nội</span>
                                                            <span class="create-at">6 năm trước</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $("input").rating();
    </script>
@endpush
