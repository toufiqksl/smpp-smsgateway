
@extend('dashboardMaster')
@section('main_dashboard_content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">View </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">ubiq</a>
                    </li>
                    <li>
                        <a href="#">Admin </a>
                    </li>
                    <li class="active">
                        View
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
                    <div class="col-lg-6 col-md-6">
                        <div>
                            <a href="{{ URL::to('admin/edit/'.$getAdminData['id']) }}" class="btn btn-info">Edit Admin</a>
                        </div>
                        <div class="text-center card-box">
                            <div class="member-card">
                                
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="{{asset('public/assets/images/users/user.png')}}" class="img-circle img-thumbnail" alt="profile-image">
                                    <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                </div>
                                <div class="">
                                    <h4 class="m-b-5">{{$getAdminData['full_name']}}</h4>
                                    <p class="text-muted">{{$getAdminData['role']}}</p>
                                </div>
                                
                                
                                <hr/>
                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{$getAdminData['full_name']}}</span></p>
                                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{$getAdminData['phone']}}</span></p>
                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$getAdminData['email']}}</span></p>
                                    <p class="text-muted font-13"><strong>Admin Type :</strong> <span class="m-l-15">{{$getAdminData['role']}}</span></p>
                                </div>
                                
                            </div>
                            </div> <!-- end card-box -->
                            </div> <!-- end col -->
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
@endsection