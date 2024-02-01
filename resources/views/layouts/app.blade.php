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
