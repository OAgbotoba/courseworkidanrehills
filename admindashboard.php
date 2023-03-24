<?php 
    
    require_once("includes/function.php");
    require_once("lib/sessions.php");
    require_once("includes/funct.php");
    require_once "lib/PHPMailer-master/PHPMailerAutoload.php";
    require_once("functions.php")

    
?>

<!doctype html>
<?php confirm();?>

<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Bootstrap -->
<link rel="stylesheet" href="adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="adminlte/bower_components/font-awesome/css/font-awesome.min.css">


<!-- AdminLTE style -->
<link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
<!-- AdminLTE style -->
<link rel="stylesheet" href="adminlte/dist/css/skins/skin-blue.min.css">
<!-- BackToTop style -->
<link rel="stylesheet" href="css/backtotop.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<!-- App style -->


<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <!-- Page script -->
  <!-- jQuery UI -->
  <script src="adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- datepicker -->
  <script src="adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- FastClick -->
  <script src="adminlte/bower_components/fastclick/lib/fastclick.js"></script>

  <script>
    $(function () {
      'use strict';

      // The Calender
      $('#calendar').datepicker();
    })(jQuery);

  </script>      
    </head>

  <!-- Page style -->
  <!-- Date Picker -->
  
<body class="skin-blue fixed">
<a id="backtotop" class="btn-primary" title="Scroll Up"><i class="fa fa-chevron-up"></i></a>

<div class="wrapper">

<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <span class="app-logo">IH</span>
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <span class="app-logo">Idanre Hills</span>
        </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">



        <!-- BackToTop button -->
        <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            
          </a>
          <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
               <p>
                
              </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
              <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Profile</a>
              </div>
            <ul>
              <li>
              <div class="pull-right">
              <a href="" ><i class="fa fa-signout"></i>Logout</a>
          
              </div>
          </li>
          </ul>
      </li>
      </ul>
  </div>
  </nav>
</header>
    <!-- Sidebar user panel -->
    <aside class="main-sidebar">
        <section class="sidebar">
    
    <div class="user-panel clearfix">
      <div class="pull-left image">
          <img src="storage/profile/default.jpg'" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
          <p>
            
            <span class="text-uppercase"></span>
          </p>
          <!-- Status -->
          <i class="fa fa-user-secret text-light-blue" title="Role"></i> 
  </div>
  </div>

<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">My Menu</li>
    <!-- Optionally, you can add icons to the links -->
    <li ><a href="admindashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href="admindashboard.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
    <li><a href="sharedexpdash.php"><i class="fa fa-users"></i> <span>Shared Experience</span></a></li>
    <li>
    <a href="logout.php">Logout</a>
          
    </li>

    
</ul>


</section>
        <!-- /.sidebar -->
    </aside>

    <!-- /.sidebar-menu -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Welcome Tourist
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
          
        
            <!-- Modal dialog -->
            
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box bg-light-blue">
                  <span class="info-box-icon"><i class="fa fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total</span>
                  <span class="info-box-number"></span>
                    <div class="progress">
                      <div class="progress-bar" style="width: 0%"></div>
                    </div>
                        <span class="progress-description">
                          Total no of accounts created
                          <?php
                $queryapproved=mysqli_query($conn, "SELECT COUNT(*) FROM profile");
                $result=mysqli_fetch_assoc($queryapproved);
                $total=array_shift($result);
                if ($total>0){

                ?>

                <span class="label pull-right" style="margin-left: 10%; font-size:30px;"> <?php echo $total; ?></span>
                <?php } ?>
                    
                        </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <!-- /.col -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box ">
                  <span class="info-box-icon"><i class="fa fa-thumbs-o-down"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Pending</span>
                    <span class="info-box-number"></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: 0%"></div>
                    </div>
                        <span class="progress-description">
                          Accounts pending approval
                    <?php
                    $data=0;
                $queryapproved=mysqli_query($conn, "SELECT COUNT(*) FROM profile WHERE status = '$data'");
                $result=mysqli_fetch_assoc($queryapproved);
                $total=array_shift($result);
                if ($total>0){

                ?>

                <span class="label pull-right" style="margin-left: 10%; font-size:30px; color:#000000"> <?php echo $total; ?></span>
                <?php } ?>
                        </span>
                
                        </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box bg-light-blue">
                  <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">New</span>
                    <span class="info-box-number"></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: 0%"></div>
                    </div>
                        <span class="progress-description">
                          New accounts Created Today

                          <?php 
                   $date=date("Y-m-d");
                $queryapproved=mysqli_query($conn, "SELECT COUNT(*) FROM profile WHERE created_on LIKE '%$date%'");
                $result=mysqli_fetch_assoc($queryapproved);
                $total=array_shift($result);
                if ($total>0){

                ?>

                <span class="label pull-right" style="margin-left: 10%; font-size:30px;"> <?php echo $total; ?></span>
                <?php } ?>
                        </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-lg-10">

                <!-- Notification box -->
                <div class="box box-primary">
                    <div class="box-header">
                      <i class="fa fa-bell-o"></i>
                      <h3 class="box-title">All Registered Tourists</h3>
                    </div>
                    <div class="box-body chat">
                    <?php echo Message(); 
        echo SuccessMessage(); 
    ?>
    <div class="table-responsive">      
           
                    <table id="empTable" class="table table-striped table-bordered table-hover display dataTable" style="width:93%; font-size:12px; overflow-x:auto; overflow-y:auto; margin-right: 3%; margin-top:30px; margin-left:1%;background:#fff;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Full Name</th>
                            <th>email</th>
                            
                            <th>Phone Number</th>
                            
                            <th>Continent</th>
                            
                            <th>Country</th>
                            <th>Created On</th>
                            <th>Status</th>
                            
                        </tr>
                      </thead>
                        <?php 
                                $query=mysqli_query($conn, "SELECT * FROM profile ORDER BY created_on desc");
                                $result=mysqli_num_rows($query);

                    $srno=0;
                    if ($result>0){
                    while($result=mysqli_fetch_assoc($query)){
                        $id=$result["id"];
                        
                        $srno++;
                        ?>
                      
                        <tr>
                            <td><?php 
                                    echo $srno;
                                
                            ?></td>
                            <td><?php echo $result['surname']; ?>
                            <?php echo $result['firstname']; ?></td>
                            <td><?php echo $result['email'];?></td>
                            <td><?php echo $result['phoneno'];?></td>
                            <td><?php echo $result['continent'];?></td>
                            
                            <td><?php echo $result['country'];?></td>
                            <td><?php echo $result['created_on'];?></td>
                            
                            <td><?php if ($result['status']=='0') {?>
                
                                <a onclick = "return confirm('Click OK to Activate the Account back?')" href="adminact.php?delts=<?php echo $result['id']; ?>"><span class="btn btn-success btn-sm" style="font-size: 10px">Activate</span>
                            <?php  } if ($result['status']=='1') {?>
                                <a onclick = "return confirm('Click OK to Suspend this Account?')" href="adminact.php?delst=<?php echo $result['id']; ?>"><span class="btn btn-warning btn-sm" style="font-size: 10px">Disapprove</span>
                          
                            <?php } ?></td>
                            

                        </tr>
                            <?php } 
} else{
                              echo "No Record Found";
                            } ?>          
                    </table>

                    </div>
                    <!-- /.box-body .chat -->
                    
                    <!-- /.box-footer -->
                  </div>
                  <!-- /.box (Notification box) -->
              </div>
              <!-- /.col -->

              
              <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
  </div>
  </div>
    <!-- /.content-wrapper -->
  
  
    </body>
    <script src="adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- BackToTop Scripts -->
<script src="js/backtotop.js"></script>
<script src="adminlte/bower_components/bootstrap/dist/js/statelgass.js"></script>
<script src="adminlte/bower_components/bootstrap/dist/js/statelga.js"></script>

<script src="adminlte/bower_components/bootstrap/dist/js/acount.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</html>
