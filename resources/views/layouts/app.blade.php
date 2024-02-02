<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/template/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/template/assets/img/favicon.png">
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/template/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/template/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="/fontawesome/js/all.min.js" crossorigin="anonymous"></script>
    <link href="/template/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/template/assets/css/argon-dashboard.css" rel="stylesheet" />
    <!-- AOS Files -->
    <link id="" href="/aos-master/dist/aos.css" rel="stylesheet" />
</head>

<body class="">
    <main class="main-content  mt-0">
        @if (Auth::user())
            <nav class="navbar navbar-main navbar-expand-lg px-0 shadow-none bg-primary" id="navbarBlur"
                data-scroll="false">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb" data-aos="fade-right">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                    href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                        </ol>
                        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                        </div>
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <div class="nav-link text-white font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1" data-aos="fade-right" data-aos-delay="200"></i>
                                    <span class="d-sm-inline d-none" data-aos="fade-right"
                                        data-aos-delay="300">{{ Auth::user()->username }}</span>
                                </div>
                            </li>
                            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item px-3 d-flex align-items-center" data-aos="fade-right"
                                data-aos-delay="300">
                                <a href="javascript:;" class="nav-link text-white p-0">
                                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @endif
        <section>
            @yield('content')
        </section>
    </main>
    <script src="/aos-master/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--   Core JS Files   -->
    <script src="/template/assets/js/core/popper.min.js"></script>
    <script src="/template/assets/js/core/bootstrap.min.js"></script>
    <script src="/template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/template/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/template/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
