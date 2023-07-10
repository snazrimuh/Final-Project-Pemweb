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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/kemenkes.png') }}">
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

    aside.left-sidebar {
      position: fixed;
      overflow-y: auto;
      height: 100%;
      z-index: 999;
    }
    footer.footer {
        margin-top: 73px;
    }

  </style>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar fixed-top" data-navbarbg="skin6" style="background-color:#004A5E; ">
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
                                <i class="mdi mdi-account-circle me-2"></i>{{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6" style="position: fixed; overflow-y: auto;">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        @auth
                            @if(auth()->user()->role === 'admin')
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span class="hide-menu">Home</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('anak.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-account"></i><span class="hide-menu">Data Anak</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('ibu.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-account"></i><span class="hide-menu">Data Ibu</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('riwayat-kehamilan.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Data Kehamilan</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin_wilayah.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Admin Wilayah</span></a></li>
                            @endif
                            @if(auth()->user()->role === 'user')
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('user.dashboard') }}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span class="hide-menu">Home</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('anak.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-account"></i><span class="hide-menu">Data Anak</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('ibu.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-account"></i><span class="hide-menu">Data Ibu</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('riwayat-kehamilan.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Data Kehamilan</span></a></li>
                                @endif
                        @endauth
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer" style="background-color:#B1C2C9; color:black">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <div class="page-wrapper mt-5">
            <div class="container-fluid">
                <div class="content mt-4">
                    @yield('content')
                </div>
            </div>
            <footer class="footer" style="background-color:#B1C2C9; color:black">
                <div class="container">
                    <p>&copy; 2023 Sistem Monitoring dan Pencegahan Stunting. All rights reserved.</p>
                    <div>
                        <ul>
                            <li>Jl. Contoh Alamat, Surakarta, Indonesia</li>
                            <li>Email: pelayanankesehatan@website.com</li>
                            <li>Telepon: +1234567890</li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
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
