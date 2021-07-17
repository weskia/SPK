<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/assets/bower_components/Ionicons/css/ionicons.min.css">
   {{-- <!-- DataTables -->
  <link rel="stylesheet" href="/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> --}}
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!--folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
    $(function(){
     $(".datepicker").datepicker({
         format: 'yyyy-mm-dd',
         autoclose: true,
         todayHighlight: true,
     })
    });
   </script>
  <!-- jvectormap -->
  <link rel="stylesheet" href="/assets/bower_components/jvectormap/jquery-jvectormap.css">

    <title>Sistem Pendukung Keputusan</title>
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" type="text/css" href="/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Date Picker -->
 <link rel="stylesheet" href="/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
 
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="/assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="/assets/plugins/timepicker/bootstrap-timepicker.min.css">
   <link rel="stylesheet" href="/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
     <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
              
        <!-- Navbar -->
        <div class="container">
        <nav class="main-header navbar navbar-expand " style="background-color: rgb(6, 39, 112)">
          <!-- Left navbar links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white"></i></a>
            </li> 
               
          </ul>
          <ul class="nav-item ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link" style="color: white"><h5><i class="fa fa-user" style="color: white"><strong>&nbsp;Weskia</strong></i></h5></a>
            </li>  
          </ul>
            
        </div>
        </nav>
        </div>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4" style="background-color:rgb(6, 39, 112)">
          <!-- Brand Logo -->
        <a href="" class="brand-link">   
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg col-sm-2 offset-sm-4"><img src="/assets/dist/img/capture.png" width="25" height="25"></span>
        </a>
          <!-- Sidebar -->
          <div class="sidebar" style="background-color: rgb(19, 75, 179)">
            <!-- Sidebar user panel (optional) -->
            <li class="nav-header" style="background-color:rgb(12, 17, 88)"><marquee> <h3 style="color:white" >BEASISWA PPA INFORMATIKA</h3></marquee></li>
            <div class="user-panel mt-5 pb-3 mb-3 d-flex">
              
              <div class="image">
                <img src="/assets/dist/img/4.png" width="30" height="30" class="img-circle elevation-3" alt="User Image">
              </div>
              <div class="info">
                <h5><a href="" class="d-block" style="color: white">Admin<br><small style="color: white">@ Weskia</small></a></h5>
              </div>
            </div>
      
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <h5><a href="/" class="nav-link" style="color: white">
                    <i class="nav-icon fas fa-tachometer-alt" style="color: white"></i>
                    <p>
                      Home
                    </p>
                  </a>
                  </h5>
                </li>
                <li class="nav-item">
                  <h5><a href="/beasiswa" class="nav-link" style="color: white">
                    <i class="nav-icon fas fa-envelope" style="color: white"></i>
                    <p>
                      Beasiswa
                    </p>
                  </a>
                  </h5>
                </li>
                <li class="nav-item">
                  <h5><a href="#" class="nav-link" style="color: white">
                    <i class="nav-icon fas fa-user" style="color: white"></i>
                    <p>
                      Data 
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  </h5>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <h5>
                        <a href="/mahasiswa" class="nav-link" style="color: white">
                          <i class="far fa-edit nav-icon" style="color: white"></i>
                          <p>Mahasiswa</p>
                        </a>
                      </h5>
                    </li>  
                    <li class="nav-item">
                     <h5> <a href="/nilai" class="nav-link" style="color: white">
                      <i class="far fa-edit nav-icon" style="color: white"></i>
                      <p>Nilai</p>
                    </a></h5>
                    </li>     
                  </ul>
                </li>
                <li class="nav-item">
                  <h5><a href="#" class="nav-link" style="color: white">
                    <i class="nav-icon fas fa-file-alt" style="color: white"></i>
                    <p>
                     Atribut
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  </h5>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                     <h5>
                      <a href="/atribut" class="nav-link" style="color: white">
                        <p>Input Atribut</p>
                      </a>
                     </h5>
                    </li>
                    <li class="nav-item">
                      <h5>
                        <a href="/rules" class="nav-link" style="color: white">
                          <p>Rules Atribut</p>
                        </a>
                      </h5>
                    </li>
                    <li class="nav-item">
                      <h5>
                        <a href="/result" class="nav-link" style="color: white">
                          <p>Result Rules</p>
                        </a>
                      </h5>
                    </li>                             
              </ul>
              <li class="nav-item">
                <h5><a href="/hasil" class="nav-link" style="color: white">
                  <i class="nav-icon fas fa-file-alt" style="color: white"></i>
                  <p>
                   Hasil Perhitungan
                 
                  </p>
                </a>
                </h5>
              </li>
              <li class="nav-item">
                <h5><a href="/login" class="nav-link" style="color: white">
                  <i class="nav-icon fas fa-sign-out-alt" style="color: white"></i>
                  <p>
                   Logout
                  </p>
                </a>
                </h5>
              </li>  
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      
        <!-- Main Footer -->
        <footer class="main-footer">
          <strong>Copyright &copy; 2020 <a href="">STKIP PGRI Sumatera Barat</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.3.7
          </div>
        </footer>
      
      </div>
      <!-- ./wrapper -->
      <!-- @yield ('content'); -->
       <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="/assets/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="/assets/dist/js/adminlte.js"></script>
      
      <!-- PAGE PLUGINS -->
      <!-- jQuery Mapael -->
      <script src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
      <script src="/assets/plugins/raphael/raphael.min.js"></script>
      <script src="/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
      <script src="/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>