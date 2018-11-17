@extend('dashBoardMaster')
@section('main_dashboard_content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Ubiq</a>
                    </li>
                    <li>
                        <a href="#">Dashboard </a>
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-primary">
                <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Admin</p>
                    <h2><span data-plugin="counterup"></span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                   
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-warning">
                <i class="mdi mdi-layers widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Active Admin</p>
                    <h2><span data-plugin="counterup"> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                    <!-- <p class="text-muted m-0"><b>Last:</b> 40.33k</p> -->
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-danger">
                <i class="mdi mdi-access-point-network widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Merchant</p>
                    <h2><span data-plugin="counterup"></span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                    <!-- <p class="text-muted m-0"><b>Last:</b> 30.4k</p> -->
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-success">
                <i class="mdi mdi-account-convert widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Active Merchant</p>
                    <h2><span data-plugin="counterup"> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                    <!-- <p class="text-muted m-0"><b>Last:</b> 1250</p> -->
                </div>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-md-4">

        </div>
        <!-- end col -->


        <!-- end col -->

    </div>
    <!-- end row -->


</div> <!-- container -->

@endsection