@extends('layouts_master.manager_master')
@section('title')
    <title>DetailProduct</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('manager/css/product.css') }}">
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Sản Phẩm Chi Tiết</h4>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img class="product-image" src="{{ asset('clients/images/products/p12.jpg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <div class="product-content">
                                <button class="product-lock btn btn-sm btn-danger">
                                    <i class="fas fa-lock"></i> Lock
                                </button>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-title">Văn Việt đăng bán hàng
                                            vô222222222222222 22222222 222222 22222222222222 22222222 22222 cảm</div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <div class="detail-content">
                                            <div class="rate">
                                                <span class="badge badge-primary">4.9</span>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="user-create">
                                                <i class="far fa-user ml-1"></i>
                                                <span>Người bán</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <div class="main-price">
                                            Giá
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="main-price">
                                            202039920
                                            <span class="text-super">đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3 align-middle">
                                        <div class="price-discount">
                                            Giá chính
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="price-discount">
                                            20.003230
                                            <span class="text-super">đ</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <div class="detail-category">
                                            <span class="badge badge-warning align-middle">Thể Loại</span>

                                        </div>

                                    </div>
                                    <div class="col-9">
                                        <span class="text-category align-middle">Thời trang nam</span>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <div class="detail-tags">
                                            <span class="badge badge-warning align-middle">Thẻ</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <span class="text-category badge badge-info ">Đồ nam quần </span>
                                        <span class="text-category badge badge-info ">Đồ nam quần </span>
                                        <span class="text-category badge badge-info ">Đồ nam quần </span>
                                        <span class="text-category badge badge-info ">Đồ nam quần </span>
                                        <span class="text-category badge badge-info ">Đồ nam quần </span>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <div class="detail-total">
                                            Tổng số lượng
                                        </div>
                                    </div>
                                    <div class="col-9">

                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <div class="detail-total">
                                            Đã bán
                                        </div>
                                    </div>
                                    <div class="col-9">

                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <div class="detail-total">
                                            Mô tả
                                        </div>
                                    </div>
                                    <div class="col-9">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
