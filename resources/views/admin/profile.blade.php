@extend('dashBoardMaster')
@section('main_dashboard_content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Profile </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Ubiq</a>
                    </li>
                    <li>
                        <a href="#">Admin </a>
                    </li>
                    <li class="active">
                        Profile
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <?php if(Session::get('message')){ ?>
            <div class="alert alert-success" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <?php Session::put('message',''); ?>
            </div>
            <?php } ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div>
                            <a href="{{ URL::to('admin/edit_profile') }}" class="btn btn-info">Edit profile</a>
                        </div>
                        <div class="text-center card-box">

                            <div class="member-card">
                                
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="{{asset('public/assets/images/users/user.png')}}" class="img-circle img-thumbnail" alt="profile-image">
                                    <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                </div>
                                <div class="">
                                    <h4 class="m-b-5">{{$adminProfileData['first_name']}}</h4>
                                    <p class="text-muted">{{$adminProfileData['phone_number']}}</p>
                                </div>
                                
                                
                                <hr/>
                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{$adminProfileData['first_name']." ".$adminProfileData['last_name']}}</span></p>
                                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{$adminProfileData['phone_number']}}</span></p>
                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$adminProfileData['email']}}</span></p>
                                    <p class="text-muted font-13"><strong>Admin Id:</strong> <span class="m-l-15">{{$adminProfileData['admin_id']}}</span></p>
                                </div>
                                
                            </div>
                            </div> <!-- end card-box -->
                            </div> <!-- end col -->
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End row -->
            </div> <!-- container -->
            @endsection