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

    <style>
        body {
            background-color: white;
        }

        .nav-link:hover {
            text-decoration-line: underline;
            text-decoration-thickness: 0.1em;
            text-underline-offset: 0.2em;
        }

        .navbar-nav .nav-item {
            margin-left: 10px;
        }

        .card-home h5 {
            transform: translate(-10%, -320%);
            font-size: 3em;
            font-weight: bold;
            color: #676767;
        }

        .card-home p {
            transform: translate(-18%, -450%);
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            color: #6D758F;
        }

        .about-us {
            padding-top: 5rem;
            padding-bottom: 5rem;
            text-align: center;
        }

        .about-us h2,
        .article-populer-text h2,
        .artikel-terbaru h2 {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            color: #6D758F;
        }

        .article-populer-img h2,
        .kritik-saran h2 {
            margin-top: 16px;
            font-size: 1.6em;
            font-weight: bolder;
            text-align: left;
            color: #6D758F;
        }

        .article-populer-img p {
            font-size: 13px;
            font-weight: normal;
            text-align: justify;
            color: #6D758F;
        }

        .about-us p {
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            color: #6D758F;
        }

        .article-populer-text p {
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: normal;
            text-align: center;
            color: #6D758F;
        }

        .btn-secondary {
            background-color: #6D758F;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: normal;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            color: #6D758F;
            background-color: white;
            font-weight: bolder;
            border: none;
        }

        .btn-artikel {
            background-color: whitesmoke;
            color: #6D758F;
            padding: 3px 5px;
            font-size: 0.70rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-newarticle {
            background-color: whitesmoke;
            color: #6D758F;
            padding: 8px 12px;
            text-decoration: none;
            font-weight: normal;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-newarticle:hover {
            color: #6D758F;
            background-color: white;
            font-weight: bolder;
            border: none;
        }

        .card-saran {
            border: 2px solid #F1F3F7;
            border-radius: 16px;
            font-size: 14px;
            font-weight: bolder;
            color: #6D758F;
            text-align: start;
        }

        .custom-placeholder::placeholder {
            color: #6D758F;
            opacity: 1;
            font-size: 12px;
            font-weight: normal;
        }

        /* Custom border color */
        .custom-placeholder {
            border: 2px solid #F1F3F7;
        }

        .custom-placeholder:focus {
            border-color: #F1F3F7;
            box-shadow: 0 0 5px rgba(128, 0, 128, 0.5);
        }

        /* .btn-kirim {
            background-color: #6D758F;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bolder;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-kirim:hover{
            background-color: white;
            color: #6D758F;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bolder;
            border-radius: 5px;
        } */

        .custom-link {
            color: #B4B9C9;
            font-weight: normal;
            font-size: 16px;
            text-decoration: none;
        }

        .custom-link:hover {
            color: #6D758F;
        }

        .img-user-small {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

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
                                <input type="text" class="form-control btn btn-outline-light" placeholder="Search" aria-label="Cari">
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

    <!-- ========DASHBOARD============ -->


    <!-- Home Section -->
    <section id="home">
        <div class="card card-home" style="padding-top: 6rem">
            <img src="gambar/background.png" style="background-size: cover; overflow:hidden; " alt="Background image">
            <div class="text" style="position: absolute; top: 60%; left: 50%;">
                <h5>Diet Bukanlah Hukuman</h5><br>
                <p>"Diet yang sukses dimulai dengan pikiran positif. Percayalah pada diri sendiri dan kemampuan untuk mengubah pola makan."</p><br>
            </div>
            <a href="{{route('tentangkami.user')}}" style="position: absolute; top: 55%; left: 58%;" type="submit" class="btn btn-secondary">Pelajari Selengkapnya →</a>
        </div>
    </section>
    <!-- End Home Section -->

    <!-- Tentang Kami Section -->
    <section id="#tentangKami">
        <div class="about-us">
            <div class="container">
                <h2 style="margin-bottom: 4rem;">Tentang Kami</h2>
                <p class="card-text cardtext">Kami akan membantu masyarakat untuk melakukan diet sehat yang sesuai kebutuhan setiap individunya<br> dengan menyediakan beberapa tips, saran, dan solusi serta dapat menghubungi dokter untuk berkonsultasi <br> mengenai diet.</p>
                <br><a href="{{route('tentangkami.user')}}" class="btn btn-secondary">Pelajari Selengkapnya →</a>
            </div>
        </div>
    </section>
    <!-- Tentang Kami Section  End-->

    <!-- Artikel Populer Section-->
    <section id="#artikelpopuler">
        <div class="article-populer-text">
            <div class="container">
                <h2 style="margin-bottom: 0.5rem;">Artikel Populer</h2>
                <p class="card-text cardtext">Berikut artikel mengenai diet yang bisa Anda baca.</p>
            </div>
        </div>
        <!-- gambar card -->
        <div class="article-populer-img" style="margin-top: 4rem;">
            <div class="container">
                <div class="card mb-3" style="max-width: 74%; margin: auto; border: 2px solid #F1F3F7; box-shadow: none;">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="gambar/diet2.jpg" class="" width="100%" alt="gambar">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Ahli Gizi UGM Paparkan Cara Diet Aman dan Sehat</h2>
                                <p class="card-text">Diet merupakan salah satu cara yang banyak dilakukan untuk menurunkan berat badan. Ada beragam jenis diet</p>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <a href="#" class="btn btn-artikel">Baca Lebih Lanjut</a>
                                    </div>

                                    <div class="col">
                                        <p class="card-text" style="padding-left: 30px;"><small class="text-muted">Jan, 02 2023</small></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Artikel Populer Section End-->

    <!-- Artikel Terbaru Start -->
    <section class="artikel-terbaru container">
        <div class="row justify-content-center py-5">
            <div class="col-6" style="margin-left: 6rem;">
                <h2 style="text-align: start;">Artikel Terbaru</h2>
            </div>
            <div class="col-4">
                <a href="#" type="onclick" class="btn-newarticle">Terbaru</a>
                <a href="#" type="onclick" class="btn-newarticle" style="margin-left: 2.3rem;">Artikel Lainnya</a>
            </div>
        </div>
        <div class="row">
            @foreach ($artikels as $row)
            <div class="col-md-4">
                <a href="{{ route('bacaan.user', $row->id)}}">
                <div class="card mx-2 my-2">
                        <img src="{{ url('uploads/artikels/' . '/' . $row->image)}}" class="img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title}}</h5>
                            <p class="card-text">{{ Str::limit($row->artikel, 100, '...') }}</p>
                        </div>
                        <div class="card-footer">
                            <<small class="text-body-secondary">Last updated {{ $row->updated_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </a>   
            </div>
            @endforeach
        </div>
    </section>
    <!-- Artikel Terbaru End -->


    <!-- Footer Section -->
    <section class="footer-dietin">
        <footer class="container pb-3 pt-5 px-4">
            <div class="row">
                <div class="col">
                    <p style="color: #B4B9C9; font-weight:normal; font-size: 16px;">Copyright © 2023 Diet Agency</p>
                </div>
                <div class="col text-end">
                    <p style="color: #B4B9C9; font-weight:normal; font-size: 16px;">All Rights Reserved | <a href="#" class="custom-link">Terms and Conditions | Privacy Policy</a></p>
                </div>
            </div>
        </footer>
    </section>
    <!-- Footer Section -->

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