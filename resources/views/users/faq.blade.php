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

    .img-user-small {
            width: 50px;
            height: 50px;
        }
</style>

<body>
    <!-- Navbar -->
    <section class="navbar-dietin">
        <nav class="navbar navbar-expand-lg shadow-sm bg-white">
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
                                <!-- <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button> -->
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


    <!-- FAQ  Section-->
    <section id="faq" class="faq-dietin bg-white">
        <div class="container">
            <div class="justify-content-center" style="height:100vh; color: #6D758F;">
                <div class="text-center">
                    <h2 class="fw-bold fs-1">Frequently Asked Questions</h2>
                    <span class="fw-normal">Membantu Anda Menemukan Pertanyaan Serupa dan Merekomendasikan Konten Menarik.</span>
                </div>

                <!-- mulai faq -->
                <div class="pt-1">
                    <div class="bg-white p-5">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apakah Diet itu mudah?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body fw-normal fs-6">
                                        FAQ adalah singkatan dari Frequently Asked Questions, yaitu daftar pertanyaan yang sering diajukan beserta jawabannya.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Bagaimana cara menggunakan FAQ ini?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body fw-normal fs-6">
                                        Anda bisa mengklik salah satu pertanyaan untuk melihat jawabannya. Saat satu pertanyaan dibuka, yang lainnya akan menutup secara otomatis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Apa Saja Diet yang Efektif?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body fw-normal fs-6">
                                        Anda bisa mengklik salah satu pertanyaan untuk melihat jawabannya. Saat satu pertanyaan dibuka, yang lainnya akan menutup secara otomatis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Berapa lama proses diet yang dibutuhkan?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body fw-normal fs-6">
                                        Anda bisa mengklik salah satu pertanyaan untuk melihat jawabannya. Saat satu pertanyaan dibuka, yang lainnya akan menutup secara otomatis.
                                    </div>
                                </div>
                            </div>
                        </div>
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