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

        .navbar-dietin {
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
            background-color: #6D758F;
        }

        /* .container-navbar {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        } */

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

        .kritik-saran p {
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: normal;
            text-align: left;
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

        .faq-dietin {
            padding-top: 6rem;
        }

        .accordion-button {
            color: #6D758F;
            background-color: #F1F3F7;
            border: 2px solid #F1F3F7;
            border-radius: 15px 15px 0px 0px;
        }

        .accordion-button.collapsed {
            color: #6D758F;
            background-color: #FFFFFF;
            border-radius: 15px;
        }

        .accordion-button:not(.collapsed) {
            color: #6D758F;
            background-color: #F1F3F7;
        }

        .accordion-body {
            color: #6D758F;
            background-color: #F1F3F7;
            border: 1px solid #F1F3F7;
            border-top: none;
            border-radius: 0px 0px 15px 15px;
        }

        .accordion-button::after {
            font-size: 1.25rem;
            color: #FFFFFF;
        }

        .accordion-item {
            margin-bottom: 15px;
            /* border-radius: 10px;  */
            overflow: hidden;
        }

        .accordion-collapse.collapsing,
        .accordion-collapse.collapse.show {
            border: none;
            /* Remove border when open */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <section class="navbar-dietin">
        <nav class="navbar navbar-expand-lg">
            <div class="container container-navbar">
                <a class="navbar-brand" href="#">
                    <img width="80" src="gambar/logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                    <form class="d-flex w-50" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('login') }}" class="btn text-white" role="button">Masuk</a>
                    <a href="{{route('register') }}" class="btn  text-white" role="button">Daftar</a>
                </div>
            </div>
        </nav>
    </section>
    <!-- end navbar -->

    <!-- content -->
    @yield('content')

    <!-- Footer Section -->
    <section class="footer-dietin">
        <footer class="container pb-3 px-4">
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