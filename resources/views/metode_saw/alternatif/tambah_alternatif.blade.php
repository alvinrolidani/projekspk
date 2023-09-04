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
                <div class="col-lg-12 col-md-4 order-0">
                    <div class="card">
                        <div class="card-header">
                            @include('metode_saw.menu_saw')
                        </div>



                        <div class="card-body">

                            <form action="/metode/saw/tambah_alternatif" method="post">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" name="kode_alternatif"
                                        value="{{ 'A' . $kd }}" readonly required
                                        aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Kode Alternatif</label>

                                </div>
                                <br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" name="nama_alternatif"
                                        placeholder="Nama Kriteria" aria-describedby="floatingInputHelp" required />
                                    <label for="floatingInput">Nama Kriteria</label>
                                </div>
                                <br>

                                <button type="submit" class="btn rounded-pill btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
    {{-- <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            @include('metode_saw.menu_saw')

                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                                <div class="row">
                                    <div class="card-body">

                                        <form action="/metode/saw/tambah_alternatif" method="post">
                                            @csrf
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    name="kode_alternatif" value="{{ 'A' . $kd }}" readonly required
                                                    aria-describedby="floatingInputHelp" />
                                                <label for="floatingInput">Kode Alternatif</label>

                                            </div>
                                            <br>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    name="nama_alternatif" placeholder="Nama Kriteria"
                                                    aria-describedby="floatingInputHelp" required />
                                                <label for="floatingInput">Nama Kriteria</label>
                                            </div>
                                            <br>

                                            <button type="submit"
                                                class="btn rounded-pill btn-primary text-white">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
