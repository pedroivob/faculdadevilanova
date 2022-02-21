<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FVL</title>
    <link rel="icon" type="image/png" href="/img/logo.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="bg-dark" >
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="login-logo">
                <a href="" class="brand-link">
                    <img src="/img/logo.png" alt="FVL Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <p class="nav-link active" aria-current="page" href="#">Faculdade Vila Nova</p>
                    </li>
                </ul>
            </div>
            @auth
            <a href="/home" class="float-right">

                <button class="btn btn-secondary">
                    <span class="spinner-grow spinner-border-sm"></span>
                    PAINEL ADMINISTRATIVO
                </button>

            </a>
            @else
            <a href="/login" class="float-right">

                <button class="btn btn-secondary">
                    <span class="spinner-grow spinner-border-sm"></span>
                    FAZER LOGIN
                </button>

            </a>
            @endauth
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container ">

        <img src="/img/logo2.png" alt="FVL Logo" class="">

    </div>

    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/dist/js/adminlte.min.js"></script>

</body>

</html>