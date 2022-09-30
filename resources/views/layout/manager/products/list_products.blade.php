@extends('layouts_master.manager_master')
@section('title')
    <title>Products</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('manager/css/product.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Danh Sách Sản Phẩm</h4>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <span class="header-text">Sản Phẩm</span>
                        </div>
                        <div class="col-10">
                            <select class="form-control-sm float-right" name="" id="">
                                <option value="">Tất cả</option>
                                <option value="">Đã duyệt</option>
                                <option value="">Chưa duyệt</option>
                                <option value="">Hủy bỏ</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm mb-0 ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tiêu Đề</th>
                                    <th>Giá</th>
                                    <th>Người tạo</th>
                                    <th>Hình ảnh</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 20; $i++)
                                    <tr>
                                        <th class="align-middle" scope="row">1</th>
                                        <td class="align-middle">
                                            {{ Str::substr('bán hàng sản phẩm tốt nhất việt làm cho ta say nắng yêu em ', 0, 20) . '...' }}
                                        </td>
                                        <td class="align-middle">123123</td>
                                        <td class="align-middle">123123</td>
                                        <td class="align-middle">
                                            <img src="{{ asset('clients/images/products/p17.jpg') }}" class="image-list"
                                                alt="">
                                        </td>
                                        <td class="align-middle"><span class="badge badge-info">ogress</span></td>
                                        <td class="align-middle">
                                            <a href=""><i class="fas fa-edit text-info"></i></a>
                                            <a href="javascript:void(0)"
                                                onclick=""><i
                                                    class="fas fa-trash text-danger"></i></a>
                                            <form action=""></form>
                                        </td>
                                    </tr>
                                @endfor

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            console.log();
        });
    </script>
@endpush
