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

    .kritik-saran h2 {
        margin-top: 16px;
        font-size: 1.6em;
        font-weight: bolder;
        text-align: left;
        color: #6D758F;
    }

    .kritik-saran p {
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: normal;
        text-align: left;
        color: #6D758F;
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

    <!-- Kritik dan Saran -->
    <section id="kritiksaran" class="kritik-saran align-items-center py-5">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="row">
                <!-- Column 1 - Text -->
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <h2> Kontak Kami</h2>
                    <p class="mb-4">Anda dapat meninggalkan kritik maupun saran agar <br> kami bisa berkembang lebih baik. </p>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B9C9" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#B4B9C9" height="24" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#B4B9C9" height="24" viewBox="0 0 24 24">
                            <path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#B4B9C9" height="24" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                        <a href="https://www.youtube.com/channel/UCF5U4psS2nfIJxKJMyvVr8w">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#B4B9C9" height="24" viewBox="0 0 24 24">
                            <path d="M10 9.333l5.333 2.662-5.333 2.672v-5.334zm14-4.333v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-4 7c-.02-4.123-.323-5.7-2.923-5.877-2.403-.164-7.754-.163-10.153 0-2.598.177-2.904 1.747-2.924 5.877.02 4.123.323 5.7 2.923 5.877 2.399.163 7.75.164 10.153 0 2.598-.177 2.904-1.747 2.924-5.877z" />
                        </svg>
                        </a>
                        
                    </div>
                </div>

                <!-- Column 2 - Form -->
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="container-fluid mx-auto my-4">
                        <div class="card-saran shadow-sm px-2 py-4">
                            <div class="card-body">
                                <form action="https://formspree.io/f/xnqkvdrd" method="POST">
                                    <div class="row">
                                        <div class="col-4 ">
                                            <div class="form-group mb-4">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" id="name" name="name" placeholder="Nama" class="form-control custom-placeholder" style=" width: 110%;" required />
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="telpon" class="form-label">Nomor Telepon</label>
                                                <input type="telpon" id="telpon" name="telpon" placeholder="Nomor Telepon" class="form-control custom-placeholder" style=" width: 110%;" required />
                                            </div>
                                        </div>
                                        <div class="col-4 ms-5">
                                            <div class="form-group mb-4">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" id="email" name="email" placeholder="Alamat Email" class="form-control custom-placeholder" style=" width: 110%;" required />
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="perusahaan" class="form-label">Perusahaan</label>
                                                <input type="perusahaan" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan" class="form-control custom-placeholder" style=" width: 110%;" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="message" class="form-label">Pesan</label>
                                        <textarea id="message" name="message" rows="4" class="form-control custom-placeholder" placeholder="Tulis Pesan Anda" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-secondary">
                                        Kirim →
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kritik dan Saran -->

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