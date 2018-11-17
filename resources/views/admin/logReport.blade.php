@extends('dashboardMaster')
@section('main_dashboard_content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">All SMS </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">SMS gateway</a>
                    </li>
                    <li>
                        <a href="#">Admin </a>
                    </li>
                    <li class="active">
                        All SMS
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
            <?php if(Session::get('message2')){ ?>
            <div class="alert alert-danger" role="alert">
                <strong>{{Session::get('message2')}}</strong>
                <?php Session::put('message2','');?>
            </div>
            <?php }?>
            <div class="table-responsive">
                <table id="allAdmin" class="table m-0 table-colored-bordered table-bordered-success display">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Ip address</th>
                            <th>report</th>
                            <th>status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
                        ?>
                        @if($data!=NULL)
                        @foreach($data as $allData)
                        
                        <tr>
                            
                            <th scope="row">{{++$i}}</th>
                            <td>{{$allData['created_at']}}</td>
                            <td>{{$allData['message']}}</td>
                            <td>{{$allData['source']}}</td>
                            <td>{{$allData['destination']}}</td>
                            <td>{{$allData['ip_address']}}</td>
                            <td>{{$allData['gateway_message']}}</td>
                            <td>{{$allData['status']}}</td>
                            
                            
                            
                        </tr>
                        @endforeach
                        @else
                        <td colspan="8"><center>No Record Found</center></td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection