@extends('Front.baseFront')

@section('title', 'FAQ')

@section('content')

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

@endsection