@extends('admin.layouts.Master')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-5 col-lg-6">

            <div class="row">
                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Customers</h5>
                            <h3 class="mt-3 mb-3">{{$totalCustomers}}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Sellers</h5>
                            <h3 class="mt-3 mb-3">{{$totalSellers}}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Today's Orders</h5>
                            <h3 class="mt-3 mb-3">{{$todayOrder}}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Growth">Total Order in this month </h5>
                            <h3 class="mt-3 mb-3">{{$currentMonthOrders}}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

        <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-cart widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Total Pending Products</h5>
                                <h3 class="mt-3 mb-3">{{$totalPendingProducts}}</h3>
                            </div> <!-- end card-body-->
                        </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-cart widget-icon"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Total Pending Order</h5>
                                    <h3 class="mt-3 mb-3">{{$totalPendingOrder}}</h3>
                                </div> <!-- end card-body-->
                            </div>
                    </div>

                </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Total order of this Week</h5>
                            <h3 class="mt-3 mb-3">{{$currentWeekOrder}}</h3>
                        </div> <!-- end card-body-->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Total order of this Year</h5>
                            <h3 class="mt-3 mb-3">{{$currentYearOrders}}</h3>
                        </div> <!-- end card-body-->
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-h-100">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="header-title">latest Order</h4>
                    <a href="{{route('InAdmin.Order.IndexPage')}}" class="btn btn-sm btn-light">See All <i class="mdi mdi-eye ms-1"></i></a>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Order Date</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recentOrders as $row)
                                <tr>
                                    <td>{{$row->order_number}}</td>
                                    <td>{{$row->created_at->format('d-m-Y')}}</td>
                                    <td><span class="badge badge-warning-lighten">{{$row->status}}</span></td>
                                    <td>{{$row->subtotal/100}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div>

            </div> <!-- e
        </div>

        <div class="col-lg-4">
            <div class="card">

            </div>
        </div>
    </div>
{{--    <!-- end row -->--}}

{{--    <div class="row">--}}
{{--        <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">--}}
{{--            <div class="card">--}}
{{--                <div class="d-flex card-header justify-content-between align-items-center">--}}
{{--                    <h4 class="header-title">Top Selling Products</h4>--}}
{{--                    <a href="javascript:void(0);" class="btn btn-sm btn-light">Export <i class="mdi mdi-download ms-1"></i></a>--}}
{{--                </div>--}}

{{--                <div class="card-body pt-0">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-centered table-nowrap table-hover mb-0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">ASOS Ridley High Waist</h5>--}}
{{--                                    <span class="text-muted font-13">07 April 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$79.49</h5>--}}
{{--                                    <span class="text-muted font-13">Price</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">82</h5>--}}
{{--                                    <span class="text-muted font-13">Quantity</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$6,518.18</h5>--}}
{{--                                    <span class="text-muted font-13">Amount</span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">Marco Lightweight Shirt</h5>--}}
{{--                                    <span class="text-muted font-13">25 March 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$128.50</h5>--}}
{{--                                    <span class="text-muted font-13">Price</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">37</h5>--}}
{{--                                    <span class="text-muted font-13">Quantity</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$4,754.50</h5>--}}
{{--                                    <span class="text-muted font-13">Amount</span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">Half Sleeve Shirt</h5>--}}
{{--                                    <span class="text-muted font-13">17 March 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$39.99</h5>--}}
{{--                                    <span class="text-muted font-13">Price</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">64</h5>--}}
{{--                                    <span class="text-muted font-13">Quantity</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$2,559.36</h5>--}}
{{--                                    <span class="text-muted font-13">Amount</span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">Lightweight Jacket</h5>--}}
{{--                                    <span class="text-muted font-13">12 March 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$20.00</h5>--}}
{{--                                    <span class="text-muted font-13">Price</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">184</h5>--}}
{{--                                    <span class="text-muted font-13">Quantity</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$3,680.00</h5>--}}
{{--                                    <span class="text-muted font-13">Amount</span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">Marco Shoes</h5>--}}
{{--                                    <span class="text-muted font-13">05 March 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$28.49</h5>--}}
{{--                                    <span class="text-muted font-13">Price</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">69</h5>--}}
{{--                                    <span class="text-muted font-13">Quantity</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h5 class="font-14 my-1 fw-normal">$1,965.81</h5>--}}
{{--                                    <span class="text-muted font-13">Amount</span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div> <!-- end table-responsive-->--}}
{{--                </div> <!-- end card-body-->--}}
{{--            </div> <!-- end card-->--}}
{{--        </div> <!-- end col-->--}}

{{--        <div class="col-xl-3 col-lg-6 order-lg-1">--}}
{{--            <div class="card">--}}
{{--                <div class="d-flex card-header justify-content-between align-items-center">--}}
{{--                    <h4 class="header-title">Total Sales</h4>--}}
{{--                    <div class="dropdown">--}}
{{--                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            <i class="mdi mdi-dots-vertical"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Action</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-body pt-0">--}}
{{--                    <div id="average-sales" class="apex-charts mb-4 mt-2"--}}
{{--                         data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>--}}


{{--                    <div class="chart-widget-list">--}}
{{--                        <p>--}}
{{--                            <i class="mdi mdi-square text-primary"></i> Direct--}}
{{--                            <span class="float-end">$300.56</span>--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="mdi mdi-square text-danger"></i> Affilliate--}}
{{--                            <span class="float-end">$135.18</span>--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="mdi mdi-square text-success"></i> Sponsored--}}
{{--                            <span class="float-end">$48.96</span>--}}
{{--                        </p>--}}
{{--                        <p class="mb-0">--}}
{{--                            <i class="mdi mdi-square text-warning"></i> E-mail--}}
{{--                            <span class="float-end">$154.02</span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div> <!-- end card-body-->--}}
{{--            </div> <!-- end card-->--}}
{{--        </div> <!-- end col-->--}}

{{--        <div class="col-xl-3 col-lg-6 order-lg-1">--}}
{{--            <div class="card">--}}
{{--                <div class="d-flex card-header justify-content-between align-items-center">--}}
{{--                    <h4 class="header-title">Recent Activity</h4>--}}
{{--                    <div class="dropdown">--}}
{{--                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            <i class="mdi mdi-dots-vertical"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>--}}
{{--                            <!-- item-->--}}
{{--                            <a href="javascript:void(0);" class="dropdown-item">Action</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-body py-0 mb-3" data-simplebar style="max-height: 403px;">--}}
{{--                    <div class="timeline-alt py-0">--}}
{{--                        <div class="timeline-item">--}}
{{--                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>--}}
{{--                            <div class="timeline-item-info">--}}
{{--                                <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">You sold an item</a>--}}
{{--                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>--}}
{{--                                <p class="mb-0 pb-2">--}}
{{--                                    <small class="text-muted">5 minutes ago</small>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>--}}
{{--                            <div class="timeline-item-info">--}}
{{--                                <a href="javascript:void(0);" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>--}}
{{--                                <small>Dave Gamache added--}}
{{--                                    <span class="fw-bold">Admin Dashboard</span>--}}
{{--                                </small>--}}
{{--                                <p class="mb-0 pb-2">--}}
{{--                                    <small class="text-muted">30 minutes ago</small>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>--}}
{{--                            <div class="timeline-item-info">--}}
{{--                                <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>--}}
{{--                                <small>Send you message--}}
{{--                                    <span class="fw-bold">"Are you there?"</span>--}}
{{--                                </small>--}}
{{--                                <p class="mb-0 pb-2">--}}
{{--                                    <small class="text-muted">2 hours ago</small>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>--}}
{{--                            <div class="timeline-item-info">--}}
{{--                                <a href="javascript:void(0);" class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>--}}
{{--                                <small>Uploaded a photo--}}
{{--                                    <span class="fw-bold">"Error.jpg"</span>--}}
{{--                                </small>--}}
{{--                                <p class="mb-0 pb-2">--}}
{{--                                    <small class="text-muted">14 hours ago</small>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>--}}
{{--                            <div class="timeline-item-info">--}}
{{--                                <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">You sold an item</a>--}}
{{--                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>--}}
{{--                                <p class="mb-0 pb-2">--}}
{{--                                    <small class="text-muted">16 hours ago</small>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>--}}
{{--                            <div class="timeline-item-info">--}}
{{--                                <a href="javascript:void(0);" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>--}}
{{--                                <small>Dave Gamache added--}}
{{--                                    <span class="fw-bold">Admin Dashboard</span>--}}
{{--                                </small>--}}
{{--                                <p class="mb-0 pb-2">--}}
{{--                                    <small class="text-muted">22 hours ago</small>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="timeline-item">--}}
{{--                            <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>--}}
{{--                            <div class="timeline-item-info">--}}
{{--                                <a href="javascript:void(0);" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>--}}
{{--                                <small>Send you message--}}
{{--                                    <span class="fw-bold">"Are you there?"</span>--}}
{{--                                </small>--}}
{{--                                <p class="mb-0 pb-2">--}}
{{--                                    <small class="text-muted">2 days ago</small>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end timeline -->--}}
{{--                </div> <!-- end slimscroll -->--}}
{{--            </div>--}}
{{--            <!-- end card-->--}}
{{--        </div>--}}
{{--        <!-- end col -->--}}

{{--    </div>--}}
    <!-- end row -->
@endsection
