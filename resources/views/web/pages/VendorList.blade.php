@extends('web.layouts.master')

@section('header')
    @include('web.includes.pageHeader')
@endsection

@section('content')
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb mb-6">
                    <li><a href="{{route('Home')}}">Home</a></li>
                    <li>Store List</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Pgae Contetn -->
        <div class="page-content mb-10 pb-2">
            <div class="container">
                <!-- Start of Vendor Toolbox -->
                <div class="toolbox vendor-toolbox pb-0">
                    <div class="toolbox-left mb-4 mb-md-0">
{{--                        <a href="#" class="btn btn-primary btn-outline btn-rounded btn-icon-left vendor-search-toggle "><i class="w-icon-category"></i>Filter</a>--}}
                        <label class="d-block">Total Store Showing 6</label>
                    </div>
{{--                    <div class="toolbox-right">--}}
{{--                        <div class="toolbox-item toolbox-sort select-box mb-0">--}}
{{--                            <label class="font-weight-normal">Sort by:</label>--}}
{{--                            <select name="orderby" class="form-control">--}}
{{--                                <option value="default" selected="selected">Default</option>--}}
{{--                                <option value="recent">Most Recent</option>--}}
{{--                                <option value="popular">Most Popular</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="toolbox-item toolbox-layout mb-0 d-flex">--}}
{{--                            <a href="vendor-dokan-store-grid.html" class="icon-mode-grid btn-layout">--}}
{{--                                <i class="w-icon-grid"></i>--}}
{{--                            </a>--}}
{{--                            <a href="vendor-dokan-store-list.html" class="icon-mode-list btn-layout active">--}}
{{--                                <i class="w-icon-list"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- End of Vendor Toolbox -->

                <!-- Start of Vendor Search Wrapper -->
                <div class="vendor-search-wrapper">
                    <form class="vendor-search-form">
                        <input type="email" class="form-control mr-4 bg-white" name="vendor" id="vendor"
                               placeholder="Search Vendors" />
                        <button class="btn btn-primary btn-rounded" type="submit">Apply</button>
                    </form>
                    <!-- End of Vendor Search Form -->
                </div>
                <!-- End of Vendor Search Wrapper -->
                @foreach($vendors as $vendor)
                <div class="store store-list mt-4">
                    <div class="store-header">
                        <a href="{{route('Vendor.Details', $vendor->shop_url)}}">
                            <figure class="store-banner">
                                <img src="{{asset('uploads/images/vendor/banner/'.$vendor->shop_banner)}}" alt="Vendor"
                                     width="400" height="188" style="background-color: #40475E" />
                            </figure>
                        </a>
                        <label class="featured-label">Featured</label>
                    </div>
                    <!-- End of Store Header -->
                    <div class="store-content">
                        <figure class="seller-brand">
                            <img src="{{asset('uploads/images/vendor/logo/'.$vendor->shop_logo)}}" alt="Brand" width="80" height="80" />
                        </figure>
                        <div class="seller-date">
                            <h4 class="store-title">
                                <a href="{{route('Vendor.Details', $vendor->shop_url)}}">{{$vendor->shop_name}}</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <div class="store-address">
                               {{$vendor->shop_address}}
                            </div>
                            <a href="{{route('Vendor.Details', $vendor->shop_url)}}" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                Visit Store<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End of Store Content -->
                </div>
                @endforeach
                <div class="d-flex justify-content-center mt-5">
                    {!! $vendors->links() !!}
                </div>
            </div>
        </div>

        <!-- End of Page Content -->
    </main>
@endsection
