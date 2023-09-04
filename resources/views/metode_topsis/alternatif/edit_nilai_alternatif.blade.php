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
                            @include('metode_topsis.menu')
                        </div>

                        <form action="/metode/topsis/{{ $id }}/edit_nilai_alternatif" method="post">
                            @csrf

                            <div class="card-body">
                                <h4> Edit Nilai Alternatif</h4>

                                <input type="hidden" value="{{ $id }}" name="alternatif_id">
                                @foreach ($kriteria as $item => $key)
                                    <br>
                                    <label for="">{{ $key->nama_kriteria }}</label>

                                    <select class="form-select form-select-md" style="width: 30%"
                                        name="crips_id[{{ $key->id }}]" id="">

                                        @foreach ($key->crips as $item_2 => $key_2)
                                            <option value="{{ $key_2->id }} "
                                                @foreach ($ite as $item_1 => $key_1)
                                                    {{ $key_2->id == $item_1 ? 'selected' : '' }} @endforeach>

                                                {{ $key_2->crips }}</option>
                                        @endforeach
                                    </select>
                                @endforeach

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>

                            </div>
                        </form>
                    </div>



                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
@endsection
