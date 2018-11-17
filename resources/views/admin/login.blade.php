@extend('loginMaster')
@section('main_content')
<div class="container-alt">
    <div class="row">
        <div class="col-sm-12">

            <div class="wrapper-page">

                <div class="m-t-40 account-pages">
                    <div class="text-center account-logo-box">
                        <h2 class="text-uppercase" style="color:white">
                            <!-- <a href="index.html" class="text-success">
                                <span><img src="{{asset('public/assets/images/logo_ubiq.png')}}" alt="" height="36"></span>
                            </a> -->
                            SMS Gateway
                        </h2>
                        <p class="" style="color:white">Admin Login</p>
                        <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                    </div>
                    <div class="account-content">
                        {!! Form::open(['url' => 'admin/check_login','method' => 'post']) !!}
                        
                        <div class="form-horizontal">
                            <p style="color: red">
                                <?php 
                                $message = Session::get('message');
                                if($message){
                                    echo $message;

                                    Session::put('message','');
                                }
                                ?>
                            </p>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" name="admin_id" type="text" required="" placeholder="Admin ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                </div>
                            </div>
                            
                            
                            <div class="form-group account-btn text-center m-t-10">
                                <div class="col-xs-12">
                                    <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                        </div>

                        {!! Form::close() !!}

                        <div class="clearfix"></div>

                    </div>
                </div>
                <!-- end card-box-->


               <!--  <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="{{URL::to('/register')}}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                    </div>
                </div> -->

            </div>
            <!-- end wrapper -->

        </div>
    </div>
</div>
@endsection   