@extends('dashboardMaster')
@section('main_dashboard_content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">All Service </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">ubiq</a>
                    </li>
                    <li>
                        <a href="#">Admin </a>
                    </li>
                    <li class="active">
                        All Service
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            
            <?php if(Session::get('message')){ ?>
            <div class="alert alert-success" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <?php Session::put('message',''); ?>
            </div>
            <?php } ?>
            <div class="table-responsive">
                <table id="allService" class="table m-0 table-colored-bordered table-bordered-success display">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Url</th>
                            <th>Description</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
                        ?>
                        @if($allService!=NULL)
                        @foreach($allService as $service)
                        
                        <tr>
                            
                            <th scope="row">{{++$i}}</th>
                            <td>{{$service['service_name']}}</td>
                            <td>{{$service['url']}}</td>
                            <td>{{$service['description']}}</td>
                            <td>
                                

                                <a class="btn btn-success btn-xs" href="{{ URL::to('service/edit/'.$service['service_id']) }}"><span title="Edit"><i class="fa fa-edit fa-lg"></i></span>
                                </a> 
                                &nbsp 
                               <a class="btn btn-danger btn-xs" href="{{ URL::to('service/delete/'.$service['service_id']) }}" onclick="return confirm('Are you sure you want to delete this Service?');"><span title="Delete"> <i class="fa fa-trash-o fa-lg "></i></span>
                               </a>
                            </td>
                            
                        </tr>
                        @endforeach
                        @else
                        <td colspan="5"><center>No Record Found</center></td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection