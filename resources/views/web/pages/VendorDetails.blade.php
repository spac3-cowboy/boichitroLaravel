@extends('web.layouts.master')

@section('header')
    @include('web.includes.pageHeader')
@endsection

@section('content')
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="{{route('Home')}}">Home</a></li>
                    <li><a href="#">Vendor</a></li>
                    <li>Details</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Pgae Contetn -->
        <div class="page-content mb-8">
            <div class="container">
                <div class="store store-wcfm-banner">
                    <figure class="store-media">
                        <img src="{{asset('uploads/images/vendor/banner/'.$vendor->shop_banner)}}" alt="Vendor" width="1240" height="460"
                             style="background-color: #40475e;" />
                    </figure>
                    <div class="store-content">
                        <div class="store-content-left mr-auto">
                            <div class="personal-info">
                                <figure class="seller-brand">
                                    <img src="{{asset('uploads/images/vendor/logo/'.$vendor->shop_logo)}}" alt="Brand" width="100"
                                         height="100" />
                                </figure>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="address-info">
                                <h4 class="store-title">{{$vendor->shop_name}}</h4>
                                <ul class="seller-info-list list-style-none">
                                    <li class="store-address">
                                        <i class="w-icon-map-marker"></i>
                                       {{$vendor->shop_address}}
                                    </li>
                                    <li class="store-phone">
                                        <a href="tel:123456789">
                                            <i class="w-icon-phone"></i>
                                            {{$vendor->shop_phone}}
                                        </a>
                                    </li>
                                    <li class="store-email">
                                        <a href="email:#">
                                            <i class="far fa-envelope"></i>
                                            {{$vendor->shop_email}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="store-content-right">
                            <div class="social-icons social-icons-colored border-thin">
                                @if(isset($vendor->shop_facebook))
                                <a href="{{$vendor->shop_facebook}}" target="_blank" class="social-icon social-facebook w-icon-facebook"></a>
                                @else
                                @endif
                                    @if(isset($vendor->shop_youtube))
                                <a href="{{$vendor->shop_youtube}}" target="_blank" class="social-icon social-youtube w-icon-youtube"></a>
                                    @else
                                        @endif
                                    @if(isset($vendor->shop_instagram))
                                        <a href="{{$vendor->shop_instagram}}" target="_blank" class="social-icon social-instagram w-icon-instagram"></a>
                                    @else
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Store WCMP Banner -->

                <div class="row gutter-lg">
                    <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                        <!-- Start of Sidebar Overlay -->
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                        <a href="#" class="sidebar-toggle"><i class="w-icon-angle-right"></i></a>
                        <div class="sidebar-content">
                            <div class="sticky-sidebar">
{{--                                <div class="widget widget-collapsible widget-categories">--}}
{{--                                    <h3 class="widget-title"><span>All Categories</span></h3>--}}
{{--                                    <ul class="widget-body filter-items search-ul">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Clothing</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="#">Men's</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="#">Fashion</a></li>--}}
{{--                                        <li><a href="#">Healthy &amp; Beauty</a></li>--}}
{{--                                        <li><a href="#">Home &amp; Kitchen</a></li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Jewelry &amp; Watch</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="#">Smart Watch</a></li>--}}
{{--                                                <li><a href="#">Watch</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Office Electronics</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="#">Accessories</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <!-- End of Widget -->
{{--                                <div class="widget widget-collapsible widget-coupons">--}}
{{--                                    <h3 class="widget-title"><span>Store Coupons</span></h3>--}}
{{--                                    <div class="widget-body">--}}
{{--                                        <div class="coupon">--}}
{{--                                            First Shopping Coupon--}}
{{--                                            <div class="coupon-tip">--}}
{{--                                                <div class="coupon-info-title">FREE Shipping Coupon</div>--}}
{{--                                                <div class="coupon-info-date">April 30, 2021</div>--}}
{{--                                                <div>Test coupon for vendor page</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- End of Widget -->
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span><i class="w-icon-truck"></i>Shipping Rules</span>
                                    </h3>
                                    <div class="widget-body">
                                        <p class="mb-0">Delivery Time: 2-3 business days</p>
                                    </div>
                                </div>
                                <!-- End of Widget -->
{{--                                <div class="widget widget-collapsible widget-location">--}}
{{--                                    <h3 class="widget-title"><span>Store Location</span></h3>--}}
{{--                                    <div class="widget-body">--}}
{{--                                        <div class="google-map" id="googlemaps"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- End of Widget -->--}}
{{--                                <div class="widget widget-collapsible widget-products">--}}
{{--                                    <h3 class="widget-title"><span>Best Selling</span></h3>--}}
{{--                                    <div class="widget-body">--}}
{{--                                        <div class="product product-widget">--}}
{{--                                            <figure class="product-media">--}}
{{--                                                <a href="product-default.html">--}}
{{--                                                    <img src="assets/images/shop/1.jpg" alt="Product" width="100"--}}
{{--                                                         height="106" />--}}
{{--                                                </a>--}}
{{--                                            </figure>--}}
{{--                                            <div class="product-details">--}}
{{--                                                <h4 class="product-name">--}}
{{--                                                    <a href="product-default.html">3D Television</a>--}}
{{--                                                </h4>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                        <span class="tooltiptext tooltip-top"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-price">$220.00</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product product-widget">--}}
{{--                                            <figure class="product-media">--}}
{{--                                                <a href="product-default.html">--}}
{{--                                                    <img src="assets/images/shop/2-1.jpg" alt="Product" width="100"--}}
{{--                                                         height="106" />--}}
{{--                                                </a>--}}
{{--                                            </figure>--}}
{{--                                            <div class="product-details">--}}
{{--                                                <h4 class="product-name">--}}
{{--                                                    <a href="product-default.html">Alarm Clock With Lamp</a>--}}
{{--                                                </h4>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                        <span class="tooltiptext tooltip-top"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-price">--}}
{{--                                                    <ins class="new-price">$30.00</ins><del--}}
{{--                                                        class="old-price">$60.00</del>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product product-widget">--}}
{{--                                            <figure class="product-media">--}}
{{--                                                <a href="product-default.html">--}}
{{--                                                    <img src="assets/images/shop/3.jpg" alt="Product" width="100"--}}
{{--                                                         height="106" />--}}
{{--                                                </a>--}}
{{--                                            </figure>--}}
{{--                                            <div class="product-details">--}}
{{--                                                <h4 class="product-name">--}}
{{--                                                    <a href="product-default.html">Apple Laptop</a>--}}
{{--                                                </h4>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                        <span class="tooltiptext tooltip-top"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-price">$1,000.00</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- End of Widget -->
                            </div>
                        </div>
                    </aside>
                    <!-- End of Sidebar -->

                    <div class="main-content">
                        <div class="tab tab-nav-underline tab-nav-boxed tab-vendor-wcfm">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#tab-1" class="nav-link active">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-2" class="nav-link">About</a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#tab-3" class="nav-link">Policies</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#tab-4" class="nav-link">Reviews(1)</a>--}}
{{--                                </li>--}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                        <div class="toolbox-left">
{{--                                            <div class="toolbox-item toolbox-sort select-box text-dark">--}}
{{--                                                <label>Sort By :</label>--}}
{{--                                                <select name="orderby" class="form-control">--}}
{{--                                                    <option value="default" selected="selected">Default sorting--}}
{{--                                                    </option>--}}
{{--                                                    <option value="popularity">Sort by popularity</option>--}}
{{--                                                    <option value="rating">Sort by average rating</option>--}}
{{--                                                    <option value="date">Sort by latest</option>--}}
{{--                                                    <option value="price-low">Sort by pric: low to high</option>--}}
{{--                                                    <option value="price-high">Sort by price: high to low</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
                                        </div>
{{--                                        <div class="toolbox-right">--}}
{{--                                            <div class="toolbox-item toolbox-show select-box">--}}
{{--                                                <select name="count" class="form-control">--}}
{{--                                                    <option value="9">Show 9</option>--}}
{{--                                                    <option value="12" selected="selected">Show 12</option>--}}
{{--                                                    <option value="24">Show 24</option>--}}
{{--                                                    <option value="36">Show 36</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                            <div class="toolbox-item toolbox-layout">--}}
{{--                                                <a href="vendor-wcfm-store-product-grid.html"--}}
{{--                                                   class="icon-mode-grid btn-layout active">--}}
{{--                                                    <i class="w-icon-grid"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="vendor-wcfm-store-product-list.html"--}}
{{--                                                   class="icon-mode-list btn-layout">--}}
{{--                                                    <i class="w-icon-list"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </nav>
                                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                                        @foreach($products as $product)
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="{{route('productSingleView', $product->slug)}}">
                                                        <img src="{{asset('uploads/images/products/'.$product->fImage->image)}}" alt="Product"
                                                             width="300" height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href=""
                                                           class="btn-product-icon btn-wishlist w-icon-heart addwishlist"
                                                           title="Add to wishlist"></a>
{{--                                                        <a href="#"--}}
{{--                                                           class="btn-product-icon btn-compare w-icon-compare"--}}
{{--                                                           title="Add to Compare"></a>--}}
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="{{route('productSingleView', $product->slug)}}"></a>{{$product->title}}</h4>
{{--                                                    <div class="ratings-container">--}}
{{--                                                        <div class="ratings-full">--}}
{{--                                                            <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                            <span class="tooltiptext tooltip-top"></span>--}}
{{--                                                        </div>--}}
{{--                                                        <a href="product-default.html" class="rating-reviews">(3--}}
{{--                                                            reviews)</a>--}}
{{--                                                    </div>--}}
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">{{$product->current_selling_price/100}}</div>
                                                        <div class="product-action">
{{--                                                            <a href="#"--}}
{{--                                                               class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add--}}
{{--                                                                To Cart</a>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                        {!! $products->links() !!}

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <p class="mb-4">{{$vendor->shop_description}}</p>
                                </div>
{{--                                <div class="tab-pane" id="tab-3">--}}
{{--                                    <div class="policies-area">--}}
{{--                                        <h3 class="title">Shipping Policy</h3>--}}
{{--                                        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,--}}
{{--                                            sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur--}}
{{--                                            purus--}}
{{--                                            ut. Tellus rutrum tellus pelle.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="policies-area">--}}
{{--                                        <h3 class="title">Refund Policy</h3>--}}
{{--                                        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,--}}
{{--                                            sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur--}}
{{--                                            purus ut. Tellus rutrum tellus pelle.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="policies-area">--}}
{{--                                        <h3 class="title text-left">Cancellation / Return / Exchange Policy</h3>--}}
{{--                                        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,--}}
{{--                                            sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur--}}
{{--                                            purus ut. Tellus rutrum tellus pelle.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane" id="tab-4">--}}
{{--                                    <div class="review-area">--}}
{{--                                        <h3 class="title font-weight-bold mb-5">Write A Review</h3>--}}
{{--                                        <input name="review" type="text" class="form-control"--}}
{{--                                               placeholder="your review">--}}
{{--                                        <button class="btn btn-rounded">Add Your Review</button>--}}
{{--                                    </div>--}}
{{--                                    <!-- End of Reveiw Area -->--}}
{{--                                    <div class="review-area">--}}
{{--                                        <h3 class="title font-weight-bold mb-5">Reviews</h3>--}}
{{--                                        <div class="reviewers d-flex align-items-center flex-wrap mb-7">--}}
{{--                                            <div class="reviewers-picture d-flex mr-2">--}}
{{--                                                <figure>--}}
{{--                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"--}}
{{--                                                         width="113" height="112" />--}}
{{--                                                </figure>--}}
{{--                                                <figure>--}}
{{--                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"--}}
{{--                                                         width="113" height="112" />--}}
{{--                                                </figure>--}}
{{--                                                <figure>--}}
{{--                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"--}}
{{--                                                         width="113" height="112" />--}}
{{--                                                </figure>--}}
{{--                                            </div>--}}
{{--                                            <div class="reviewer-name">--}}
{{--                                                <a href="#" class="font-weight-bold mr-1">John Doe</a>has reviewed--}}
{{--                                                this store--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Reviewers -->--}}
{{--                                        <div class="review-ratings">--}}
{{--                                            <div class="review-ratings-left mr-auto">--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Feature</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Varity</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Flexibility</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Delivery</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Support</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- End of Review Ratings Left -->--}}
{{--                                            <div class="review-ratings-right">--}}
{{--                                                <div class="average-rating">5.0<sub>/5</sub></div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full mr-0">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- End of Review Ratings Right -->--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Review Ratings -->--}}
{{--                                        <div class="user-wrap">--}}
{{--                                            <div class="user-photo">--}}
{{--                                                <figure>--}}
{{--                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"--}}
{{--                                                         width="113" height="112" />--}}
{{--                                                </figure>--}}
{{--                                                <div class="rated text-center">--}}
{{--                                                    <label>Rated</label>--}}
{{--                                                    <span class="score">5.0</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- End of User Photo -->--}}
{{--                                            <div class="user-info">--}}
{{--                                                <h4 class="user-name">John Doe</h4>--}}
{{--                                                <div class="user-date mb-7">--}}
{{--                                                    <span>1 Reviews</span>--}}
{{--                                                    <span>April 1, 2021 12:12 Pm</span>--}}
{{--                                                </div>--}}
{{--                                                <p>Diam in arcu cursus euismod quis. Eget sit amet tellusvitae--}}
{{--                                                    sapien pellentesque habitant morbi tristique senectus et.--}}
{{--                                                    Cras adipiscing enim ermentum et sollicitudin ac orci phasellus.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- End of User Info -->--}}
{{--                                            <div class="review-ratings">--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Feature</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Varity</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Flexibility</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Delivery</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="ratings-container">--}}
{{--                                                    <div class="ratings-full">--}}
{{--                                                        <span class="ratings" style="width: 100%;"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <label>5.0 Support</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of User Wrap -->--}}
{{--                                    </div>--}}
{{--                                    <!-- End of Reveiw Area -->--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->
                </div>
            </div>
        </div>


        <!-- End of Page Content -->
    </main>
@endsection
