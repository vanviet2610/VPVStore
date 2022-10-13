@extends('layouts_master.client_master')
@section('title')
    <title>Trang Chủ</title>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('clients/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/rateit.css') }}">
@endpush

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
            <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Thể Loại</div>
            <nav class="yamm megamenu-horizontal">
                <ul class="nav">
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="icon fa fa-shopping-bag" aria-hidden="true"></i>Quần Áo</a>
                        <ul class="dropdown-menu mega-menu">
                            <li class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <ul class="links list-unstyled">
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Shoes </a></li>
                                            <li><a href="#">Jackets</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Sport Wear</a></li>
                                            <li><a href="#">Blazers</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Shorts</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.menu-item -->

                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="icon fa fa-laptop" aria-hidden="true"></i>Giày Dép</a>
                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                        <ul class="dropdown-menu mega-menu">
                            <li class="yamm-content">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-lg-4">
                                        <ul>
                                            <li><a href="#">Gaming</a></li>
                                            <li><a href="#">Laptop Skins</a></li>
                                            <li><a href="#">Apple</a></li>
                                            <li><a href="#">Dell</a></li>
                                            <li><a href="#">Lenovo</a></li>
                                            <li><a href="#">Microsoft</a></li>
                                            <li><a href="#">Asus</a></li>
                                            <li><a href="#">Adapters</a></li>
                                            <li><a href="#">Batteries</a></li>
                                            <li><a href="#">Cooling Pads</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-lg-4">
                                        <ul>
                                            <li><a href="#">Routers &amp; Modems</a></li>
                                            <li><a href="#">CPUs, Processors</a></li>
                                            <li><a href="#">PC Gaming Store</a></li>
                                            <li><a href="#">Graphics Cards</a></li>
                                            <li><a href="#">Components</a></li>
                                            <li><a href="#">Webcam</a></li>
                                            <li><a href="#">Memory (RAM)</a></li>
                                            <li><a href="#">Motherboards</a></li>
                                            <li><a href="#">Keyboards</a></li>
                                            <li><a href="#">Headphones</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-banner-holder"> <a href="#"><img alt=""
                                                src="{{ asset('clients/images/banners/banner-side.png') }}"></a> </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                    </li>
                    <!-- /.menu-item -->

                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="icon fa fa-paw" aria-hidden="true"></i>Trẻ Em</a>
                        <ul class="dropdown-menu mega-menu">
                            <li class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <ul class="links list-unstyled">
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Shoes </a></li>
                                            <li><a href="#">Jackets</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Sport Wear</a></li>
                                            <li><a href="#">Blazers</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Shorts</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-12 col-md-3">
                                        <ul class="links list-unstyled">
                                            <li><a href="#">Handbags</a></li>
                                            <li><a href="#">Jwellery</a></li>
                                            <li><a href="#">Swimwear </a></li>
                                            <li><a href="#">Tops</a></li>
                                            <li><a href="#">Flats</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Winter Wear</a></li>
                                            <li><a href="#">Night Suits</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-12 col-md-3">
                                        <ul class="links list-unstyled">
                                            <li><a href="#">Toys &amp; Games</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">School Bags</a></li>
                                            <li><a href="#">Lunch Box</a></li>
                                            <li><a href="#">Footwear</a></li>
                                            <li><a href="#">Wipes</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-12 col-md-3">
                                        <ul class="links list-unstyled">
                                            <li><a href="#">Sandals </a></li>
                                            <li><a href="#">Shorts</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Jwellery</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Night Dress</a></li>
                                            <li><a href="#">Swim Wear</a></li>
                                            <li><a href="#">Toys</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.menu-item -->

                </ul>
                <!-- /.nav -->
            </nav>
            <!-- /.megamenu-horizontal -->
        </div>
        <!-- /.side-menu -->
        <!-- ================================== TOP NAVIGATION : END ================================== -->

        <!-- ============================================== HOT DEALS ============================================== -->
        <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
            <h3 class="section-title">Ưu Đãi Đặc Biệt</h3>
            <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                <div class="item">
                    <div class="products">
                        <div class="hot-deal-wrapper">
                            <div class="image"> <img src="{{ asset('clients/images/hot-deals/p25.jpg') }}"
                                    alt=""> </div>
                            <div class="sale-offer-tag"><span>49%<br>
                                    off</span></div>
                            <div class="timing-wrapper">
                                <div class="box-wrapper">
                                    <div class="date box"> <span class="key">120</span> <span
                                            class="value">DAYS</span> </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span>
                                    </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="minutes box"> <span class="key">36</span> <span
                                            class="value">MINS</span> </div>
                                </div>
                                <div class="box-wrapper hidden-md">
                                    <div class="seconds box"> <span class="key">60</span> <span
                                            class="value">SEC</span> </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.hot-deal-wrapper -->

                        <div class="product-info text-left m-t-20">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $600.00 </span> <span
                                    class="price-before-discount">$800.00</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->

                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <div class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                            class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </div>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                </div>
                <div class="item">
                    <div class="products">
                        <div class="hot-deal-wrapper">
                            <div class="image"> <img src="{{ asset('clients/images/hot-deals/p5.jpg') }}"
                                    alt=""> </div>
                            <div class="sale-offer-tag"><span>35%<br>
                                    off</span></div>
                            <div class="timing-wrapper">
                                <div class="box-wrapper">
                                    <div class="date box"> <span class="key">120</span> <span
                                            class="value">Days</span> </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span>
                                    </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="minutes box"> <span class="key">36</span> <span
                                            class="value">MINS</span> </div>
                                </div>
                                <div class="box-wrapper hidden-md">
                                    <div class="seconds box"> <span class="key">60</span> <span
                                            class="value">SEC</span> </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.hot-deal-wrapper -->

                        <div class="product-info text-left m-t-20">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $600.00 </span> <span
                                    class="price-before-discount">$800.00</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->

                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <div class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                            class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </div>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                </div>
                <div class="item">
                    <div class="products">
                        <div class="hot-deal-wrapper">
                            <div class="image"> <img src="{{ asset('clients/images/hot-deals/p10.jpg') }}"
                                    alt=""> </div>
                            <div class="sale-offer-tag"><span>35%<br>
                                    off</span></div>
                            <div class="timing-wrapper">
                                <div class="box-wrapper">
                                    <div class="date box"> <span class="key">120</span> <span
                                            class="value">Days</span> </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span>
                                    </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="minutes box"> <span class="key">36</span> <span
                                            class="value">MINS</span> </div>
                                </div>
                                <div class="box-wrapper hidden-md">
                                    <div class="seconds box"> <span class="key">60</span> <span
                                            class="value">SEC</span> </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.hot-deal-wrapper -->

                        <div class="product-info text-left m-t-20">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $600.00 </span> <span
                                    class="price-before-discount">$800.00</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->

                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <div class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                            class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </div>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                </div>
            </div>
            <!-- /.sidebar-widget -->
        </div>
        <!-- ============================================== HOT DEALS: END ============================================== -->

        <!-- ============================================== PRODUCT TAGS ============================================== -->
        <div class="sidebar-widget product-tag wow fadeInUp">
            <h3 class="section-title">Thẻ sản phẩm </h3>
            <div class="sidebar-widget-body outer-top-xs">
                <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a
                        class="item active" title="Vest" href="category.html">Vest</a> <a class="item"
                        title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture"
                        href="category.html">Furniture</a> <a class="item" title="T-shirt"
                        href="category.html">T-shirt</a> <a class="item" title="Sweatpants"
                        href="category.html">Sweatpants</a> <a class="item" title="Sneaker"
                        href="category.html">Sneaker</a> <a class="item" title="Toys" href="category.html">Toys</a>
                    <a class="item" title="Rose" href="category.html">Rose</a>
                </div>
                <!-- /.tag-list -->
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== PRODUCT TAGS : END ============================================== -->
        <!-- ============================================== SPECIAL DEALS ============================================== -->

        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
            <h3 class="section-title">Special Deals</h3>
            <div class="sidebar-widget-body outer-top-xs">
                <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                    <div class="item">
                        <div class="products special-product">
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p28.jpg" alt=""> </a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p15.jpg" alt=""> </a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p26.jpg" alt="image"> </a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products special-product">
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p18.jpg" alt=""> </a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p17.jpg" alt=""> </a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p16.jpg" alt=""> </a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products special-product">
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p15.jpg" alt="images">
                                                        <div class="zoom-overlay"></div>
                                                    </a> </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p14.jpg" alt="">
                                                        <div class="zoom-overlay"></div>
                                                    </a> </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="#"> <img
                                                            src="assets\images\products\p13.jpg" alt="image"> </a>
                                                </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== SPECIAL DEALS : END ============================================== -->

    </div>

    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        {{-- ----------------------------- Slider ----------------------------------------------------------------------------------- --}}
        @include('layout.clients.layout._slider')

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('clients/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('clients/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('clients/js/wow.min.js') }}"></script>
@endpush
