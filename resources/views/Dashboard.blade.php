<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW5_C_11934</title>
    <style>
        
    .main-sidebar {
    background: linear-gradient(135deg, #2c3e50 0%, #4ca1af 100%);
    }

    .main-header {
    background-color: #ffffff;
    box-shadow: 2px 5px rgba(0, 0, 0, 0.1);
    }

    .nav-sidebar .nav-item .nav-link {
    border-radius: 10px;
    transition: background-color 0.3s ease;
    }
    .nav-sidebar .nav-item .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
    }

    .card {
    border-radius: 10px;
    box-shadow: 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    }

    .card:hover {
    transform: scale(1.02);
    }

    .modal-content {
    border-radius: 10px;
    }
    .modal-header{
        background-color: #3498db;
        color: white;
    }
    .btn-close{
        background-color: white;
    }

    .main-footer{
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 10px;
        text-align: center;
    }
    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

<script src="{{ asset('js/adminlte.min.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>

            <!-- LOGOUT BUTTON -->
            <ul class="navbar-nav ml-auto logout py-0">
                <li class="nav-item py-0">
                    <a href="#" class="nav-link text-white bg-danger rounded-lg" role="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </li>
            </ul>
            

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        
        <a href="#" class="brand-link">
            <img src="{{ asset('img/primefit.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Primefit Indonesia</span>
        </a>

        
            <div class="sidebar">
            
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">I PUTU ANJES VERNANDA</a>
                    </div>
                </div>
            
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('gyms/index') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                    </ul>
                </nav>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('gyms/presensi') }}" class="nav-link">
                                <i class="nav-icon fas fa-check"></i>
                                <p>Presensi</p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                220711934
            </div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Primefit</a>. </strong> All rights reserved.
        </footer>
    </div>

    
    <div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Apakah Ingin logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <span aria-hiden="true"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="{{ url('login') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>