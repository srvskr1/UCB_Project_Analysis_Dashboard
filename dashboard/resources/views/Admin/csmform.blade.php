<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('admin/assets/images/favicon.png')}}">
    <title>Add Project</title>
    <!-- Custom CSS -->
    <link href="{{URL::asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".append_div"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            var submit          = $(".submit");
            document.getElementById('submit').disabled = true;
            var x = 1; //initlal text box count
            $(document).on("keyup", ".pr", function() {
                var sum = 0;
                $(".pr").each(function(){
                    sum += +$(this).val();
                });
                $(".total").val(sum);
                if(sum==100)
                {
                    document.getElementById('submit').disabled = false;
                    document.getElementById('add').disabled = true;
                }
            });
            $(function() {
                $("#datepicker").datepicker({minDate: 0, maxDate: '+1M +10D'});
            });







            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment

                    $(wrapper).append('<div><label>Task </label><br/> <label>Name</label><br/> <input type="text" class="form-control" name="prname[]"/><a href="#" class="remove_field">Remove</a><br/> <br/><label>Start Date:</label> <br /><input type="date" class=" form-control  selector" id="datepicker"  name="sdate[] "/><br/><br/> <label>End Date</label><br/> <input type="date" class="form-control edate" id="eedate" name="edate[]"><br /><br/> <label> Percentage </label><br /> <input type="number" class="form-control pr" name="percentage[]"/><br/><br/> <label>Status: </label> <br/><br/><select class="form-control" name="tstatus[]"><option value="initlal">initial</option><option value="on going">on going</option><option value="pending">pending</option><option value="complete">complete</option></select><br/><br/> <label> Comment </label> <br/><br/>  <input type="text" class="form-control" name= "comment[]" /><br/><br/></div>'); //add input box
                }
            });





            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <a href="#" class="logo">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{URL::asset('admin/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{URL::asset('admin/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                                <!-- dark Logo text -->
                               {{-- <img src="{{URL::asset('admin/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{URL::asset('admin/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />--}}
                            </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                            <div class="d-flex align-items-center">

                                <div class="ml-1 d-none d-sm-block">
                                    <img src="{{URL::asset('admin/assets/images/UCB.png')}}" class="light-logo" alt="homepage" />
                                </div>
                            </div>
                        </a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter">
                            <a class="srh-btn">
                                <i class="ti-close"></i>
                            </a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::asset('admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="/logout"><i class="ti-email m-r-5 m-l-5"></i> Logout</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.index')}}" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>



                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Create New Project</h4>
                    @foreach ($errors->all() as $error)
                        <font color="red"> {{ $error }}</font>  <br>
                    @endforeach

                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create Project</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-body" style="background:white" onmouseover="this.style.background='#d9d9d9';" onmouseout="this.style.background='white';">



                        <h4 class="card-title">Project</h4>
                        <h5 class="card-subtitle"> Create New Project </h5>
                        <form class="form-horizontal m-t-30" method="post">
                            @csrf

                            <div class="append_div">
                                <div class="form-group">
                                    <label>Project Name </label>
                                    <input type="text" class="form-control" name="pname" >
                                </div>

                                <div class="form-group">
                                    <label for="example-email">Project Co-ordinator Name </label>
                                    <input type="text" id="example-email" name="cname" class="form-control" placeholder="name 1/ name 2">
                                </div>

                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input type="date" class="data-theme form-control " placeholder="" name="start">
                                </div>

                                <div class="form-group">
                                    <label>Mandays</label>
                                    <input type="number" class="form-control" value="" name="man">
                                </div>

                                <!-- <div class="form-group">
                                    <label>Description </label>
                                    <input type="text" class="form-control" name="description" >
                                </div>
                                <div class="form-group">
                                    <label>Comment </label>
                                    <input type="text" class="form-control" name="comment" >
                                </div> -->
                                <div class="form-group">
                                    <label>Status </label>
                                    <select class="form-control" name="status" id="">
                                        <option value="initial">initial</option>
                                        <option value="on going">on going</option>
                                        <option value="pending">pending</option>
                                        <option value="complete">complete</option>

                                    </select>
                                </div>
                            </div>



                            <div class="card card-body" style="background:white" onmouseover="this.style.background='#b3ffb3';" onmouseout="this.style.background='white';">







                                <div class="form-group">
                                    <label >Total percentage</label>
                                    <input type="text" class="total" value="" readonly>
                                    <button class="add_field_button btn btn-success" id="add">Add More Task</button>
                                    <input type="submit"  class="submit btn btn-success" id="submit" name="submit" value="submit">
                                </div>

                            </div>
                        </form>



                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Right sidebar -->
                        <!-- ============================================================== -->
                        <!-- .right-sidebar -->
                        <!-- ============================================================== -->
                        <!-- End Right sidebar -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Page wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Wrapper -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->
            <script src="{{URL::asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="{{URL::asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
            <script src="{{URL::asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="{{URL::asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
            <!--Wave Effects -->
            <script src="{{URL::asset('admin/dist/js/waves.js')}}"></script>
            <!--Menu sidebar -->
            <script src="{{URL::asset('admin/dist/js/sidebarmenu.js')}}"></script>
            <!--Custom JavaScript -->
            <script src="{{URL::asset('admin/dist/js/custom.min.js')}}"></script>
</body>

</html>