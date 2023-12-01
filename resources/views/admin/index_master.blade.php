<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset ('admin/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset ('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="...">

    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset ('admin/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
    <style>
        /* Gaya untuk dropdown */
        /* .dropdown-menu-sidenav {
            display: none;
            background-color: #fff;
            border-color: #5e72e4;
            border: 1px solid;
            border-radius: 6px;
            min-width: 100px;
            z-index: 1;
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.3s ease;
            margin: 0 34px;
            font-size: 0.875rem;
        }

        .dropdown-menu-sidenav li {
            margin: 10px 0 10px 0;
        }

        .dropdown-menu-sidenav li:hover {
            color: #5e72e4;
        }

        .dropdown-menu-sidenav.show {
            display: block;
            opacity: 1;
            max-height: 200px;
        } */

    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 position-absolute w-100" style="background:#24263D;"></div>
    @include('admin.body.aside')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.body.header')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('content')
            @include('admin.body.footer')
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{asset ('admin/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset ('admin/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset ('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset ('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset ('admin/assets/js/plugins/chartjs.min.js')}}"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

    </script>
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
        document.addEventListener("DOMContentLoaded", function () {
            function handleDropdownClick(event) {
                const dropdownMenu = event.currentTarget.querySelector(".dropdown-menu-sidenav");

                if (dropdownMenu.classList.contains("show")) {
                    dropdownMenu.style.maxHeight = "0";
                    setTimeout(() => {
                        dropdownMenu.classList.remove("show");
                    }, 300); // Sesuaikan dengan durasi transisi CSS (dalam milidetik)
                } else {
                    const allDropdowns = document.querySelectorAll(".dropdown-menu-sidenav");
                    allDropdowns.forEach(function (dropdown) {
                        dropdown.style.maxHeight = "0";
                        dropdown.classList.remove("show");
                    });

                    dropdownMenu.classList.add("show");
                    dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + "px";
                }

                event.stopPropagation();
            }

            const dropdowns = document.querySelectorAll(".nav-item");

            dropdowns.forEach(function (dropdown) {
                dropdown.addEventListener("click", handleDropdownClick);
            });

            document.addEventListener("click", function (event) {
                const dropdowns = document.querySelectorAll(".dropdown-menu-sidenav");
                dropdowns.forEach(function (dropdown) {
                    dropdown.style.maxHeight = "0";
                    setTimeout(() => {
                        dropdown.classList.remove("show");
                    }, 300); // Sesuaikan dengan durasi transisi CSS (dalam milidetik)
                });
            });
        });

    </script>

    <script src="https://kit.fontawesome.com/your_kit_id.js" crossorigin="anonymous"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset ('admin/assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>

</html>
