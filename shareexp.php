<?php 
    
    require_once("includes/function.php");
    require_once("lib/sessions.php");
    require_once("includes/funct.php");
    require_once "lib/PHPMailer-master/PHPMailerAutoload.php";
    require_once("functions.php")

    
?>

<!doctype html>
<?php konfiirm();?>
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
            <?php echo $_SESSION["surname"];?> <?php echo $_SESSION["firstname"];?>
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
              <a href="logout.php" ><i class="fa fa-signout"></i>Logout</a>
          
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
    <li ><a href=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href=""><i class="fa fa-user"></i> <span>Profile</span></a></li>
    <li><a href="shareexp.php"><i class="fa fa-users"></i> <span>Share Experience</span></a></li>
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
            <small><?php echo $_SESSION["surname"];?> <?php echo $_SESSION["firstname"];?></small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
          
        
            <!-- Modal dialog -->
            
              <!-- /.col -->
                <!-- /.info-box -->
             
            <div class="row">
              <div class="col-lg-10">

                <!-- Notification box -->
                <div class="box box-primary">
                    <div class="box-header">
                      <i class="fa fa-bell-o"></i>
                      <h3 class="box-title">Share your Experience</h3>
                    </div>
                    
                    
                    <div class="box-body chat">
                            <form action="sharepost.php" method="post" enctype="multipart/form-data" style="margin:5%">
                            <?php echo Message(); 
        echo SuccessMessage(); 
    ?>

                            <div class="form-group">
                            <label for="name">Places Visited </label>
                    <select name="places" id="" class="form-control">
                                <option>Arun River</option>
                                <option>Agboogun Foot print</option>  
                                <option>Kings Palace</option>
                                <option>Arun River</option>
                                <option>Unreadable Letter</option> 
                                <option>Igboore School</option>
                                <option>Kings Cementary</option> 
                                <option>Noah Ark</option> 
                                <option>Wonder Rock</option>
                                <option>Court Room</option>
                                <option>Orosun Rock</option>  
                                </select>
                    </div>
                            <div>
        <label>Your Experience</label>
        <textarea type="text" name="message" value="" id="edit" class="form-control"></textarea>
        
        
    </div>
    <div>
                   
  
  </div>
    <div>
                    <label for="name">Upload Best Image Captured </label>
                    
                                        
                    <input type="file" name="images" id="name" style="width:50%"  value="" class="form-control py-2">
            
  
  </div>
    
    
    <br>
    <div>
                            <input type="submit" name="email_data" class="btn btn-primary btn-sm col-md-3" value='Submit' style="float:right">
                        </div>
</form>
             

                            </form>
                    </div>
                    <!-- /.box-body .chat -->
                    <!-- /.box-footer -->
                  </div>
                  <!-- /.box (Notification box) -->
              </div>
              <!-- /.col -->

              <!--/.box -->

                <!-- Calendar -->
                <!-- /.box -->
              </div>
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
<script src="ckeditor/ckeditor.js"></script>
      <script>
        ClassicEditor
            .create( document.querySelector( '#edit' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
</html>
