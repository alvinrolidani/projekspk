@extends('layouts.main')
@section('content')
    <style>
        .table-responsive {
            display: table
        }
    </style>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                    <div class="card">
                        <div class="card-header">
                            @include('metode_saw.menu_saw')
                        </div>
                        <div class="card-body">
                            <div class="col-lg-8 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="{{ asset('template_admin/assets/img/icons/unicons/envelope-solid-24.png') }}"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt3"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt3">
                                                            <a class="dropdown-item" href="/metode/saw/kriteria">View
                                                                More</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Kriteria</span>
                                                <h3 class="card-title mb-2">{{ $kriteria }}</h3>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="{{ asset('template_admin/assets/img/icons/unicons/group-solid-24.png') }}"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt6"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt6">
                                                            <a class="dropdown-item" href="/metode/saw/alternatif">View
                                                                More</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <span>Alternatif</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $alternatif }}</h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
@endsection
