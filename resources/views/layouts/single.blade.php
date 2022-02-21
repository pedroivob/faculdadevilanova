<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Faculdade Vila Nova @auth - {{ Auth::user()->name }} @endauth</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="icon" type="image/png" href="/img/logo.png">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/adminlte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Procurar"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 " style="background-image: url(/img/background2.png) ;   background-repeat: no-repeat;">
            <!-- Brand Logo -->
            <a href="/home" class="brand-link">
                <img src="/img/logo.png" alt="FVL Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">FVL</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">@auth{{ Auth::user()->name }}@endauth</a>
                        <a class=" text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </div>

                @include('layouts.nav')
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">

                <div class="container"
                    style="background-image: url(/img/background.png) ;   background-repeat: no-repeat;"><br>
                    @yield('content')
                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.sidebar -->
    </aside>



    <footer class="main-footer">
        <strong>Faculdade Vila Nova </strong><br>
        Grupo: Pedro, Lucas, Fabio, Leal, Gustavo.
        <div class="float-right d-none d-sm-inline-block">
            <b>Versão</b> 1.0
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/adminlte/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/adminlte/plugins/moment/moment.min.js"></script>
        <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/adminlte/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/adminlte/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/adminlte/dist/js/demo.js"></script>
        <!-- Pro Modal -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>


        <script>
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        </script>

</body>

</html>