@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 col-md-4 order-0">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="template_admin/assets/img/icons/unicons/chart-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>

                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="card-title mb-2">Metode Simple Additive Weighting (SAW)</h3>

                                    <small>
                                        Metode SAW atau Simple Additive Weighting adalah metode yang sering dikenal dengan
                                        mentode penjumlahan terbobot. Maksud dari penjumlahan terbobot yaitu mencari
                                        penjumlahan terbobot dari rating di tiap alternatif pada seluruh atribut/ kriteria.
                                        Hasil/ Skor total yang diperoleh untuk sebuah alternatif yaitu dengan menjumlahkan
                                        semua hasil perkalian antara rating / yang dibandingkan pada lintas atribut dan
                                        bobot setiap atribut. Rating pada setiap atribut sebelumnya harus sudah melalui
                                        proses normalisasi.</small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-4 order-0">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="template_admin/assets/img/icons/unicons/cc-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>

                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="card-title mb-2">Metode Weigthted Product (WP)</h3>

                                    <small>
                                        Metode Weighted Product atau biasa disingkat WP adalah salah satu metode
                                        penyelesaian untuk masalah MADM (Multi Attribute Decision Making). Metode ini
                                        meng-evaluasi beberapa alternatif terhadap sekumpulan atribut atau kriteria, dimana
                                        setiap atribut saling tidak bergantung satu dengan yang lainnya.

                                        Menurut Yoon (Kusmarini, 2006), metode Weighted Product menggunakan teknik perkalian
                                        untuk menghubungkan rating atribut, dimana rating tiap atribut harus dipangkatkan
                                        terlebih dahulu dengan bobot atribut yang bersangkutan. Proses ini sama halnya
                                        dengan proses normalisasi.</small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-4 order-0">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="template_admin/assets/img/icons/unicons/chart-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>

                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>

                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="card-title mb-2">Metode Technique for Order Preference by Similarity to Ideal
                                        Solution (TOPSIS)</h3>

                                    <small>
                                        Metode Technique for Order Preference by Similarity to Ideal Solution (TOPSIS)
                                        merupakan salah satu dari beberapa metode yang digunakan untuk menyelesaikan masalah
                                        MADM. Technique for Order Preference by Similarity to Ideal Solution (TOPSIS)
                                        didasarkan pada konsep dimana alternatif terpilih yang terbaik tidak hanya memiliki
                                        jarak terpendek dari solusi ideal positif, namun juga memiliki jarak terpanjang dari
                                        solusi ideal negatif. Konsep ini banyak digunakan pada beberapa model MADM untuk
                                        menyelesaikan masalah keputusan secara praktis. Technique for Order Preference by
                                        Similarity to Ideal Solution (TOPSIS) konsepnya sederhana dan mudah dipahami,
                                        komputasinya efisien, dan memiliki kemampuan untuk mengukur kinerja relatif dari
                                        alternatif-alternatif keputusan dalam bentuk matematis yang sederhana.</small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    {{-- <div class="avatar flex-shrink-0">
            <img src="template_admin/assets/img/icons/unicons/chart-success.png"
                alt="chart success" class="rounded" />
        </div> --}}
