<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dietin|Landing Page</title>
    <link rel="icon" href="gambar/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- FAQ drodwon -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .nav-link:hover {
        text-decoration-line: underline;
        text-decoration-thickness: 0.1em;
        text-underline-offset: 0.2em;
    }

    .navbar-nav .nav-item {
        margin-left: 10px;
    }

    .input-group .form-control {
        margin-right: 10px;
    }

    .tentangkami-dietin {
        padding-top: 6rem;
    }

    .img-user-small {
            width: 50px;
            height: 50px;
        }
</style>

<body>
    <!-- Navbar -->
    <section class="navbar-dietin">
        <nav class="navbar navbar-expand-lg shadow-sm bg-white" style="position: fixed; z-index: 1;   width: 100%;">
            <div class="container container-navbar">
                <!-- Logo di kiri navbar -->
                <a class="navbar-brand me-auto" href="#">
                    <img width="70" src="gambar/logo.png" alt="Logo DietIn">
                </a>

                <!-- Kosongkan bagian di kanan navbar -->
                <div class="ms-auto">
                    <div class="row">
                        <div class="col">

                            <!-- Daftar menu -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item ">
                                        <a class="nav-link active fw-normal fs-6" aria-current="page" href="{{ route('homepage.user') }}">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link active fw-normal fs-6" aria-current="page" href="{{ route('tentangkami.user') }}">Tentang</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link active fw-normal fs-6" aria-current="page" href="{{ route('contact.user')}}">Contact Us </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link active fw-normal fs-6" aria-current="page" href="{{ route('faq.user') }}">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Kotak pencarian -->
                        <div class="col-auto">
                            <div class="input-group">
                                <input type="text" class="form-control btn btn-outline-light" placeholder="Search" aria-label="Cari" aria-describedby="button-addon2">
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="welcome-user dropdown">
                                <div role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Hello, {{Auth::user()->username }}</span>
                                    <img class="img-user img-user-small rounded-circle" src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt="profil">
                                </div>
                                <ul class="dropdown-menu" style="mask-type: 10px;">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- end navbar -->


    <!-- TentangKami  Section-->
    <section id="tentangkami" class="tentangkami-dietin bg-white">
        <div class="container" style="padding-top: 3rem;">
            <div class="justify-content-center" style="height:100vh; color: #6D758F;">
                <div class="text-left">
                    <h2 class="fw-bold fs-1">Tentang Kami</h2>
                </div>

                <!-- mulai faq -->
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="gambar/dokter.jpg" alt="Tentang Kami" class="" width="75%">
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-5"></h2>
                        <p style="color: black; font-size:medium; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit orci nec elit tempor, non dictum mi pretium. Nullam luctus turpis sit amet enim bibendum, id egestas odio condimentum. Sed at nisl vel nisi gravida accumsan. Mauris id cursus urna. Fusce scelerisque, nulla in posuere bibendum, erat est euismod lectus, sit amet luctus justo mi et libero. Curabitur at mauris sit amet purus dapibus blandit. Phasellus tincidunt nulla ut nisi feugiat, in ullamcorper sapien interdum.</p>
                        <p style="color: black; font-size:medium;  text-align: justify;""> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer dapibus, sapien et accumsan dapibus, ligula mi bibendum odio, at tempor velit libero ac ligula. Phasellus quis sapien et risus gravida interdum a et metus. Aliquam euismod erat et sapien euismod, nec dictum augue consectetur. Integer tincidunt velit sit amet lorem tincidunt scelerisque. Curabitur tempus lorem vel nisl sagittis, a cursus massa congue.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- FAQ end -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- FAQ drodwon -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>