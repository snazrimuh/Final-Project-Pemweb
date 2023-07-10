<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Pemeriksaan Kehamilan</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo-kesehatan.png') }}">
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

    <style>
        header.topbar {
            position: fixed;
            width: 100%;
            z-index: 9999;
        }

        footer.footer {
            margin-top: 73px;
        }
    </style>
</head>

<body style="background-color:#F5F5F5">
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar fixed-top" data-navbarbg="skin6" style="background-color:#004A5E;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand ms-4" href="{{ route('user.dashboard') }}">
                        <b class="logo-icon">
                            <img src="{{ asset('/assets/images/logo.png') }}" alt="homepage" class="dark-logo" width="180" />
                        </b>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-account-circle me-2"></i>Login
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <div class="container fluid">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; width: 60rem;">
        <div class="col-md-6">
            <div class="card shadow my-auto">
                <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_kelurahan">ID Kelurahan</label>
                            <select class="form-control" id="id_kelurahan" name="id_kelurahan">
                                <option value="">Pilih Kelurahan</option>
                                @foreach($kelurahan as $item)
                                    <option value="{{ $item->id_kelurahan }}">{{ $item->id_kelurahan }} - {{ $item->nama_kelurahan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn mt-3" style="color:white; background-color:#005066">Register</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </div> 
            </div>
        </div>
    </div>
</div>

        <footer class="footer fixed-bottom" style="background-color:#B1C2C9; color:black">
            <div class="container">
                <p>&copy; 2023 Sistem Monitoring dan Pencegahan Stunting. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
