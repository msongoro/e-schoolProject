<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="Home/assets/img/e-report.png">
    <title>DashBoard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
       <!-----nvbarpage start---->
       @include('admin.navbarpage')
       <!------sidebar start------>
       @include('admin.sidebarPage')
       <!-------endsidebar----->
       <!--------wrapp---->
       <!-------table----->

       <div class="container" style="margin-top: 100px;">
           <div class="row" style="margin-left: 150px;">
               <div class="col-md-4">
                   <div class="card shadow-lg">Data1</div>
               </div>
               <div class="col-md-4">
                <div class="card shadow-lg">Data1</div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg">Data1</div>
            </div>
        </div>
        </div>
           </div>
       </div>

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="admin/assets/js/jquery-3.2.1.min.js"></script>
	<script src="admin/assets/js/popper.min.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/jquery.slimscroll.js"></script>
    <script src="admin/assets/js/Chart.bundle.js"></script>
    <script src="admin/assets/js/chart.js"></script>
    <script src="admin/assets/js/app.js"></script>

</body>



</html>
