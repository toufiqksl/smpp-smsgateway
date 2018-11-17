
@extend('dashboardMaster')
@section('main_dashboard_content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Add Service </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">ubiq</a>
                    </li>
                    <li>
                        <a href="#">Admin </a>
                    </li>
                    <li class="active">
                        Add Service
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-8">

                        <div class="p-20">
                            {!! Form::open(['url' => 'service/check_service','method' => 'post']) !!}
                            <!-- <form action="#" data-parsley-validate novalidate> -->
                                                 <?php if(Session::get('message2')){ ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>{{Session::get('message2')}}</strong>
                                <?php Session::put('message2',''); ?>
                            </div>
                            <?php } ?>
                            <?php if(Session::get('message')){ ?>
                            <div class="alert alert-success" role="alert">
                                <strong>{{Session::get('message')}}</strong>
                                <?php Session::put('message','');?>
                            </div>
                            <?php } ?>

                                <div class="form-group">
                                    <label for="first_name">Service Name<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" required="" name="service_name" placeholder="Service Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Servive Id<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" required="" name="service_id" placeholder="service Id">
                                </div>
                                <div class="form-group">
                                    <label for="email">Service Url<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" required="" name="url" placeholder="Service url">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Description<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" required="" name="description" placeholder="Description">
                                </div>
                                
                                <div class="form-group account-btn text-center m-t-10">
                                <div class="col-xs-12">
                                    <button class="btn w-md btn-danger btn-bordered waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                           <!--  </form> -->
                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
</div>
@endsection