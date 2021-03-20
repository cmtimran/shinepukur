<!--     
    Theme Name: QuickTech Limited
    Author: QuickTech Limited 
    Author URI: http://quicktech-ltd.com
    Description: QuicTech IT maintain standard quality for Website and Creative Design
    Version: 23.0.0 -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shinepukur Suites | @yield('title','Dashbaord')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/summernote/summernote-bs4.css">
  <!-- select2 -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/select2/css/select2.min.css">
  <!-- toastr -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- flatpickr -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/dist/css/toastr.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/dist/css/custom.css">
  <!-- custome css -->
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/plugins/datatables/dataTables.bootstrap4.css">
    <!-- data tab;e -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" target="_blank" class="nav-link"><i class="fas fa-desktop"></i> Visit Website</a>
      </li>
    </ul>

      <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/superadmin/dashboard')}}" class="brand-link">
      <span class="brand-text font-weight-light"> <img src="http://www.shinepukursuites.com/public/frontEnd/img/core-img/logo2.png" > </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="user-image">
          <img src="{{asset(auth::user()->image)}}" class="img-circle" alt="User Image">
        </div>
        <div class="user-info">
          <a href="#" class="d-block">{{auth::user()->name}}</a>
          <i class="fas fa-circle"></i>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-user-tie"></i>
              <p>
                User
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/superadmin/user/create')}}" class="nav-link">
                 <i class="far fa-dot-circle  nav-icon"></i> 
                    <p>Create </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/superadmin/user/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-sliders-h"></i>

              <p>
                Home Slider
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/slider/create')}}" class="nav-link">
                 <i class="far fa-dot-circle  nav-icon"></i> 
                    <p>New Slider Create </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/slider/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>All Slider Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->
<!-- 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fab fa-airbnb"></i>
              <p>
                Logo
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/logo/create')}}" class="nav-link">
                 <i class="far fa-dot-circle  nav-icon"></i> 
                    <p>Create </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/logo/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- nav item end -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-archive"></i>
              <p>
               Packages
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('/admin/package/create')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>New Package Create  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/package/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> All Package Manage </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->
 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-fire-alt"></i>
              <p>
                Testimonial
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/testimonial/create')}}" class="nav-link">
                 <i class="far fa-dot-circle  nav-icon"></i> 
                    <p> New Testimonial Create </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/testimonial/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> All Testimonial Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-image"></i>
              <p>
                Restaurant  Menu
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('/admin/specialmenu/create')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>New Special Menu Create </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/admin/specialmenu/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> All Special Menu Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/specialmenu/')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> Upload Menu</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-image"></i>
              <p>
                Banquet Hall
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('/admin/banquetphotos/create')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>New Photos Create</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/admin/banquetphotos/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>All Photos Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/banquetvideo/create')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>New  Video Create </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/admin/banquetvideo/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>All Video Manage</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-image"></i>
              <p>
                Our Gallery
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('/admin/specialmenu/add')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/admin/specialmenu/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- nav item end -->
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-blog"></i>
              <p>
                Our Blog
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/blog/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- nav item end -->

          
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-archive"></i>
              <p>
               Room Service
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('/admin/roomservice/create')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/roomservice/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>

            </ul>
          </li>
         
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fa fa-cubes" aria-hidden="true"></i>
              <p>
                Contact Info
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/contactinfo/create')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Create </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/contactinfo/manage')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer"> 
    <strong>© Shinepukur Suites. All rights reserved | Design & Developed by  <a href="http://quicktech-ltd.com/">Quicktech IT.</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
             <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
            </a>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="{{url('password/change')}}" class="nav-link">
             <i class="fas fa-key"></i>
              <p>Change Password</p>
            </a>
          </li>
          <!-- nav item end -->
      </ul>
    </nav>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backEnd/')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backEnd/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="{{asset('public/backEnd/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public/backEnd/')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('public/backEnd/')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('public/backEnd/')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('public/backEnd/')}}/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backEnd/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backEnd/')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('public/backEnd/')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/backEnd/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('public/backEnd/')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backEnd/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- FastClick -->
<script src="{{asset('public/backEnd/')}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backEnd/')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backEnd/')}}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backEnd/')}}/plugins/datatables/jquery.dataTables.js"></script>
  <!-- DataTables -->
<script src="{{asset('public/backEnd/')}}/plugins/datatables/dataTables.bootstrap4.js"></script>
  <!-- DataTables -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- flatpicker -->
<script>
      $(function () {
       flatpickr("#flatpicker", {
        minDate:"today",
       });
      })
  </script>
<script src="{{asset('public/backEnd/')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Select2 -->
<script src="{{asset('public/backEnd/')}}/dist/js/toastr.min.js"></script>
<!-- Toastr -->
{!! Toastr::message() !!}
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });

  })
</script>
<script>
      $('.summernote').summernote({
        height:250,
        
      });
</script>

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

</body>

</html>
