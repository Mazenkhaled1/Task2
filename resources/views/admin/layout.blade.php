<!DOCTYPE html>
<html  lang="{{__("messages.lang")}}" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  @yield('styles')
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/css/fontawesome.all.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    
.professional-link {
    display: inline-block;
    font-size: 16px; 
    color: #007bff; 
    font-family: 'Arial', sans-serif;
    text-decoration: none; 
    padding: 8px 16px; 
    border-radius: 4px; 
    background-color: #f8f9fa; 
    border: 1px solid #ccc; 
    transition: all 0.3s ease-in-out; 
}

.professional-link:hover {
    color: #ffffff; 
    background-color: #007bff; 
    border-color: #007bff;
}

.professional-link:focus {
    outline: none; 
    box-shadow: 0 0 0 3px rgba(38, 143, 255, 0.5);
}

  </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li>
        <a href="{{ route('change', [__('messages.link')]) }}" class="professional-link">{{ __('messages.lname') }}</a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('admin/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/img/user-profile.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin user</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="{{route('/')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Sample Pages
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page one</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page two</p>
                        </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Sample Pages
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page one</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page two</p>
                        </a>
                    </li>
                </ul>
            </li>

            

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Sample Pages
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page one</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page two</p>
                        </a>
                    </li>
                </ul>
            </li>

            

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Sample Pages
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page one</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Page two</p>
                        </a>
                    </li>
                </ul>
            </li>
    
            <!-- إضافة المزيد من القوائم بالطريقة نفسها -->
        </ul>
    </nav>

    
    </div>

  </aside>

  @yield('main')


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminjs/bootstrap.bundle.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.js')}}"></script>
@yield('scripts')
</body>
</html>
