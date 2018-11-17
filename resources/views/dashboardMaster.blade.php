<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/assets/images/fav_icon.png')}}">
        <!-- App title -->
        <title>Ubiq</title>
        <!-- form Wizard -->
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/plugins/jquery.steps/css/jquery.steps.css')}}" />
        <!-- App css -->
        <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <link href="{{asset('public/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        
        <!-- plugins CSS -->
        
        <link href="{{asset('public/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet"  type="text/css"/>
        <link href="{{asset('public/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet"  type="text/css"/>
        <link href="{{asset('public/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
        
        
        <script src="{{asset('public/assets/js/modernizr.min.js')}}"></script>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-83057131-1', 'auto');
        ga('send', 'pageview');
        </script>
    </head>
    <body class="fixed-left">
        <?php
        $id =Session::get('id');
        ?>
        @if($id!=NULL)
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo"><span>SMS<span>Gateway</span></span><i class="mdi mdi-layers"></i></a>
                    
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            
                        </ul>
                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{asset('public/assets/images/users/user.png')}}" alt="user-img" class="img-circle user-img">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>
                                        {{Session::get('name')}}
                                        </h5>
                                    </li>
                                    <li><a href="{{URL::to('/admin/profile')}}"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="{{URL::to('/admin/check_logout')}}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    
                                </ul>
                            </li>
                            </ul> <!-- end navbar-right -->
                            </div><!-- end container -->
                            </div><!-- end navbar -->
                        </div>
                        <!-- Top Bar End -->
                        <!-- ========== Left Sidebar Start ========== -->
                        <div class="left side-menu">
                            
                            <!-- Sidebar -left -->
                            
                           
                            @include('leftsidebar')
                           
                            <div class="sidebar-inner slimscrollleft">
                                <!--- Sidemenu -->
                                
                                <!-- Sidebar -->
                                <div class="clearfix"></div>
                                <div class="help-box">
                                    <h5 class="text-muted m-t-0">For Help ?</h5>
                                    <p class=""><span class="text-custom">Email:</span> <br/> info@ubiqbd.com</p>
                                    <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+880) 1705-266557</p>
                                </div>
                            </div>
                            
                        </div>
                        <!-- Left Sidebar End -->
                        <!-- ============================================================== -->
                        <!-- Start right Content here -->
                        <!-- ============================================================== -->
                        <div class="content-page">
                            <!-- Start content -->
                            <div class="content">
                                
                                @yield('main_dashboard_content')
                                </div> <!-- content -->
                                <footer class="footer text-right">
                                    <?php echo date("Y"); ?> © Ubiq
                                </footer>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Right content here -->
                            <!-- ============================================================== -->
                            <!-- Right Sidebar -->
                            <div class="side-bar right-bar">
                                <a href="javascript:void(0);" class="right-bar-toggle">
                                    <i class="mdi mdi-close-circle-outline"></i>
                                </a>
                                <h4 class="">Settings</h4>
                                <div class="setting-list nicescroll">
                                    <div class="row m-t-20">
                                        <div class="col-xs-8">
                                            <h5 class="m-0">Notifications</h5>
                                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                                        </div>
                                    </div>
                                    <div class="row m-t-20">
                                        <div class="col-xs-8">
                                            <h5 class="m-0">API Access</h5>
                                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                                        </div>
                                    </div>
                                    <div class="row m-t-20">
                                        <div class="col-xs-8">
                                            <h5 class="m-0">Auto Updates</h5>
                                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                                        </div>
                                    </div>
                                    <div class="row m-t-20">
                                        <div class="col-xs-8">
                                            <h5 class="m-0">Online Status</h5>
                                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Right-bar -->
                        </div>
                        <!-- END wrapper -->
                        <script>
                        var resizefunc = [];
                        </script>
                        <!-- jQuery  -->
                        <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
                        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
                        <script src="{{asset('public/assets/js/detect.js')}}"></script>
                        <script src="{{asset('public/assets/js/fastclick.js')}}"></script>
                        <script src="{{asset('public/assets/js/jquery.blockUI.js')}}"></script>
                        <script src="{{asset('public/assets/js/waves.js')}}"></script>
                        <script src="{{asset('public/assets/js/jquery.slimscroll.js')}}"></script>
                        <script src="{{asset('public/assets/js/jquery.scrollTo.min.js')}}"></script>
                        <script src="{{asset('public/assets/plugins/switchery/switchery.min.js')}}"></script>
                       <!-- datepicker -->
                        <script src="{{asset('public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

                      
                        <!-- datatable -->
    
                        <script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
                        <script src="{{asset('public/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
                        <script type="text/javascript">
                        $(document).ready(function() {
                        $('#allAdmin').DataTable();
                        $('#allMerchant').DataTable();
                        $('#paidHistory').DataTable();
                        $('#allService').DataTable();
                        $('#allUserAccount').DataTable();
                        $('#allMerchantAccount').DataTable();
                        } );
                        </script>
                        <script src="{{asset('public/assets/pages/jquery.datatables.init.js')}}"></script>
                        <!-- End Data table -->

                    <!-- toggle transaction history page -->


                        <script type="text/javascript" src="{{asset('public/assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
                        <script type="text/javascript" src="{{asset('public/assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
                        <script src="{{asset('public/assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
                        <script src="{{asset('public/assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
                        <!--Form Wizard-->
                        <script src="{{asset('public/assets/plugins/jquery.steps/js/jquery.steps.min.js')}}" type="text/javascript"></script>
                        <script type="text/javascript" src="{{asset('public/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
                        <!-- App js -->
                        <script src="{{asset('public/assets/js/jquery.core.js')}}"></script>
                        <script src="{{asset('public/assets/js/jquery.app.js')}}"></script>
                        <script type="text/javascript" src="{{asset('public/assets/pages/jquery.form-advanced.init.js')}}"></script>
                        
                        
                        
                        <!--wizard initialization-->
                        <script src="{{asset('public/assets/pages/jquery.wizard-init.js')}}" type="text/javascript"></script>
                       <!--  <script type="text/javascript">
                             function printDiv(printQr) {
                                var prtContent = document.getElementById("printQr");
                                var WinPrint = window.open('', '', 'left=0,top=0,width=800px,height=900px,toolbar=0,scrollbars=0,status=0');
                                WinPrint.document.write(prtContent.innerHTML);
                                WinPrint.document.close();
                                WinPrint.focus();
                                WinPrint.print();
                                WinPrint.close();
                            }
                         </script> -->
                         
                         
                     @else
                    <script type="text/javascript">
                        window.location = "{{url('/')}}";//here double curly bracket
                    </script>

                    @endif
                    </body>
                </html>