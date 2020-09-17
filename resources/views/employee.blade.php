<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="../../assets/images/logo-sm2.png">
    <title>Mass Line (pvt) Ltd</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../assets/libs/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../assets/libs/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="../../assets/libs/datatables/css/select.dataTables.min.css" rel="stylesheet">
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
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="fas fa-bars fa-lg"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.blade.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-sm.png" alt="homepage" class="light-logo" width="38px" height="38px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../../assets/images/logo-txt.png" width="152px" height="40px" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="fas fa-bars fa-lg"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fas fa-search fa-lg"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-bell fa-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="far fa-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-cog m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
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
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.blade.php" aria-expanded="false"><i class="fas fa-th"></i><span class="hide-menu pl-1">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-users fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Customers</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="wholesale-customer.blade.php" class="sidebar-link"><i class="fas fa-people-carry fa-3x"></i><span class="hide-menu">Wholesale Customer</span></a></li>
                                <li class="sidebar-item"><a href="retail-customer.blade.php" class="sidebar-link"><i class="fas fa-street-view fa-3x" aria-hidden="true"></i><span class="hide-menu">Retail Customers</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="supplier.blade.php" aria-expanded="false"><i class="fas fa-truck-loading fa-lg"></i></i><span class="hide-menu">&#X00A0;Suppliers</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-th-list fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Categories</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="add-category.blade.php" class="sidebar-link"><i class="fas fa-tasks"></i><span class="hide-menu">Manage Categories </span></a></li>
                                <li class="sidebar-item"><a href="main-categories-summary.blade.php" class="sidebar-link">
                                        <i class="far fa-chart-bar"></i><span class="hide-menu">View Summary</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-exchange-alt" aria-hidden="true"></i><span class="hide-menu pl-1">Transaction</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="wholesale-transactions.blade.php" class="sidebar-link"><i class="fas fa-money-bill-alt" aria-hidden="true"></i><span class="hide-menu">Wholesale transaction </span></a></li>
                                <li class="sidebar-item"><a href="retail-transaction.blade.php" class="sidebar-link">
                                        <i class="fas fa-hand-holding-usd"></i><span class="hide-menu">Retail transactions</span>
                                    </a></li>
                                <li class="sidebar-item"><a href="supplier-transaction.blade.php" class="sidebar-link">
                                        <i class="fas fa-credit-card"></i><span class="hide-menu">Supplier transactions</span>
                                    </a></li>
                                <li class="sidebar-item"><a href="deposited-returned-cheques.blade.php" class="sidebar-link">
                                        <i class="fas fa-undo"></i><span class="hide-menu">Manage Cheques</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="invoice.blade.php" aria-expanded="false"><i class="fas fa-newspaper"></i><span class="hide-menu">Generate Invoice</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="employee.blade.php" aria-expanded="false">
                                <i class="fa fa-address-card" aria-hidden="true"></i><span class="hide-menu pl-1">Employees</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="employee.blade.php" class="sidebar-link"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="hide-menu">Manage Employees </span></a></li>
                                <li class="sidebar-item"><a href="employee-salary.blade.php" class="sidebar-link">
                                        <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Salary Report</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="vehicle.html" aria-expanded="false">
                                <i class="fa fa-car" aria-hidden="true"></i><span class="hide-menu pl-1">Vehicle</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="vehicle-management.blade.php" class="sidebar-link"><i class="fas fa-cogs"></i><span class="hide-menu">Manage Vehicles</span></a></li>
                                <li class="sidebar-item"><a href="vehicle-finance.blade.php" class="sidebar-link">
                                        <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Vehicle Finance</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-secret"></i><span class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.blade.php" class="sidebar-link"><i class="fas fa-sign-in-alt"></i><span class="hide-menu"> Login </span></a></li>
                                <li class="sidebar-item"><a href="authentication-register.blade.php" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Register </span></a></li>
                            </ul>
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
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Employee Managment</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Employees</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Employee Management</li>
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
                    <div class="col">
                        <div class="card">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="nav-item"> <a class="nav-link active border-bottom-0 border-right-0 border-top-5 border-success" data-toggle="tab" href="#AddEmployee" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down font-weight-bold">Add Employee</span></a> </li>
                                <li class="nav-item"> <a class="nav-link border-bottom-0 border-right-0 border-top-5 border-success" data-toggle="tab" href="#viewEmployees" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down font-weight-bold">View Employees</span></a> </li>
                            </ul>
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="AddEmployee" role="tabpanel">
                                    <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="col-12">
                                                <hr>
                                                <h4 class="card-title py-3">Employee Personnel details</h4>
                                                <hr>
                                                <div class="form-group row">
                                                    <label for="fname" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="fname" placeholder="Name Here">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Age</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lname" placeholder="Type Your Age Here">
                                                    </div>
                                                </div>
                                                <div class="input-group row my-3">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Date Of Birth</label>
                                                    <input type="text" class="form-control mydatepicker ml-3" placeholder="mm/dd/yyyy">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3">Gender</label>
                                                    <div class="col-md-9">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                                            <label class="custom-control-label" for="customControlValidation1">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                            <label class="custom-control-label" for="customControlValidation2">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3">Marital Status</label>
                                                    <div class="col-md-9">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                                            <label class="custom-control-label" for="customControlValidation1">Single</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                            <label class="custom-control-label" for="customControlValidation2">Married</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 m-t-15">Blood Group</label>
                                                    <div class="col-md-9">
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                            <option>Select</option>
                                                            <optgroup>
                                                                <option value="AK">A RhD positive (A+)</option>
                                                                <option value="HI">A RhD negative (A-)</option>
                                                                <option value="HI">B RhD positive (B+)</option>
                                                                <option value="HI">B RhD negative (B-)</option>
                                                                <option value="HI">O RhD positive (O+)</option>
                                                                <option value="HI">O RhD negative (O-)</option>
                                                                <option value="HI">AB RhD positive (AB+)</option>
                                                                <option value="HI">AB RhD negative (AB-)</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 m-t-15">Education Qualifications</label>
                                                    <div class="col-md-9">
                                                        <select class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;">
                                                            <optgroup label="G.C.E O/L">
                                                                <option value="AK">Local G.C.E O/L</option>
                                                                <option value="HI">Foreign G.C.E O/L</option>
                                                            </optgroup>
                                                            <optgroup label="G.C.E A/L">
                                                                <option value="CA">Local G.C.E A/L</option>
                                                                <option value="NV">Foreign G.C.E A/L</option>
                                                            </optgroup>
                                                            <optgroup label="Degree Status">
                                                                <option value="AZ">Undergraduate</option>
                                                                <option value="CO">Graduate</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Permanent Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lname" placeholder="Type Your Address Here">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">NIC Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lname" placeholder="Type Your NIC Here">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Driving Licence Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lname" placeholder="Type Your Licence Number Here">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">B Card Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lname" placeholder="Type Your B Card Number Here">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4 class="card-title py-3">Employee Details</h4>
                                                <hr>
                                                <div class="form-group row">
                                                    <label for="fname" class="col-sm-3 text-left control-label col-form-label">Employee ID Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="fname" placeholder="Type your ID Here">
                                                    </div>
                                                </div>
                                                <div class="input-group row my-3">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Date Of Joined</label>
                                                    <input type="text" class="form-control mydatepicker ml-3" placeholder="mm/dd/yyyy">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 m-t-15">Employee Type</label>
                                                    <div class="col-md-9">
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                            <option>Select</option>
                                                            <optgroup>
                                                                <option value="AK">Internship</option>
                                                                <option value="HI">Permenant</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fname" class="col-sm-3 text-left control-label col-form-label">Employement Status</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="fname" placeholder="Type the Status">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 m-t-15">Name of Bank</label>
                                                    <div class="col-md-9">
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                            <option>Select</option>
                                                            <optgroup>
                                                                <option value="AK">BOC</option>
                                                                <option value="HI">People's Bank</option>
                                                                <option value="HI">HNB</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Bank Account Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lname" placeholder="Type Your Account Number Here">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h4 class="card-title py-3">Employee Contact Details</h4>
                                            <hr>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Contact Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="lname" placeholder="Type Your Contact Number Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Email Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="lname" placeholder="Type Your Email Address Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Address for Correspondant</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="lname" placeholder="Type the address Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Emergancy Contact Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="lname" placeholder="Type the Number Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Emergancy Contact Person</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="lname" placeholder="Type the name Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Relationship with E contact Person</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="lname" placeholder="Type the relationship Here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Mediclaim Details Provided?</label>
                                                <div class="col-md-9">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                                        <label class="custom-control-label" for="customControlValidation1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                        <label class="custom-control-label" for="customControlValidation2">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body float-right">
                                                <button type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane  p-20" id="viewEmployees" role="tabpanel">
                                    <div class="p-20">
                                        <h1>Employee Edit Delete Table Goes Here</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <footer class="footer text-center">
                    All Rights Reserved by Mass Line (pvt) Ltd. Designed and Developed by <a href="#">####</a>.
                </footer>
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
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="../../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../../dist/js/custom.min.js"></script>
        <!-- This Page JS -->
        <script src="../../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <script src="../../dist/js/pages/mask/mask.init.js"></script>
        <script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
        <script src="../../assets/libs/select2/dist/js/select2.min.js"></script>
        <script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
        <script src="../../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        </script>
</body>

</html>