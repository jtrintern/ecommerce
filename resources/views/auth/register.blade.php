<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset ('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset ('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset ('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle"
        href="{{ asset ('admin/assets/css/argon-dashboard.css?v=2.0.4') }}"
        rel="stylesheet" />

    <style>
        #navbar-register.navbar-scrolled {
            transform: translateY(-114%);
            transition: transform 0.3s ease-in-out;
        }

        #navbar-register {
            /* Atur posisi awal navbar */
            transition: transform 0.3s ease-in-out;
        }

    </style>
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav id="navbar-register"
                    class="navbar navbar-expand-lg border-radius-lg top-0 z-index-3 position-absolute mt-4 py-2 start-0 end-0 mx-4"
                    style="background: transparent; box-shadow: none;">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 "
                            href="{{ route ('register') }}">
                            <!-- Argon Dashboard 2 -->
                            <img src="{{ asset ('admin/assets/img/logo-transparent.png') }}"
                                alt="">
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-6">
                                <li class="nav-item mx-3">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="../pages/dashboard.html" style="color: #fff;">
                                        <!-- <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i> -->
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link me-2" href="../pages/profile.html" style="color: #fff;">
                                        <!-- <i class="fa fa-user opacity-6 text-dark me-1"></i> -->
                                        Product
                                    </a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link me-2" href="../pages/sign-up.html" style="color: #fff;">
                                        <!-- <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> -->
                                        Category
                                    </a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link me-2" href="../pages/sign-in.html" style="color: #fff;">
                                        <!-- <i class="fas fa-key opacity-6 text-dark me-1"></i> -->
                                        Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="../pages/sign-in.html" style="color: #fff;">
                                        <!-- <i class="fas fa-key opacity-6 text-dark me-1"></i> -->
                                        Users
                                    </a>
                                </li>
                            </ul>
                            <!-- <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/product/argon-dashboard"
                                        class="btn btn-sm mb-0 me-1 btn-primary">Free Download</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset ('admin/assets/img/register.png') }}'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Good Morning!</h1>
                        <p class="text-lead text-white">Use these awesome forms to create new account in your project
                            for free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center pb-6">
                <div class="col-xl-9 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0" style="width: 800px">
                        <div class="card-header text-center pt-4">
                            <h5>Sign Up</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form role="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">First Name</label>
                                            <input type="text" name="firstName" id="form2Example11" class="form-control"
                                                placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Last Name</label>
                                            <input type="text" name="lastName" id="form2Example11" class="form-control"
                                                placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Address</label>
                                            <input type="text" name="address" id="form2Example11" class="form-control"
                                                placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Birthdate</label>
                                            <input type="date" name="birthdate" id="form2Example11" class="form-control"
                                                placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Email</label>
                                            <input type="email" name="email" id="form2Example11" class="form-control"
                                                placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="form2Example11">Phone/Whatsapp</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"
                                                style="background-color: #e9ecef;">+62</span>
                                            <input type="text" name="phone" class="form-control"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Password</label>
                                            <input type="password" name="password" id="form2Example11"
                                                class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Konfirmasi
                                                Passsword</label>
                                            <input type="password" name="password_confirmation" id="form2Example11"
                                                class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-info text-start">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms
                                            and Conditions</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a
                                        href="{{ route ('login') }}"
                                        class="text-dark font-weight-bolder">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--   Core JS Files   -->
    <script src="{{ asset ('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset ('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <script>
        let prevScrollpos = window.pageYOffset;

        window.onscroll = function () {
            let currentScrollPos = window.pageYOffset;
            let navbar = document.getElementById("navbar-register");

            if (prevScrollpos > currentScrollPos) {
                navbar.classList.remove("navbar-scrolled");
            } else {
                navbar.classList.add("navbar-scrolled");
            }

            prevScrollpos = currentScrollPos;
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset ('admin/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
