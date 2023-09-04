<?php

namespace App\Http\Controllers\metode_topsis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\metode_topsis\CripsTOPSISModel;
use App\Models\metode_topsis\KriteriaTOPSISModel;
use App\Models\metode_topsis\AlternatifTOPSISModel;
use App\Models\metode_topsis\NilaiAlternatifTOPSISModel;

class NilaiAlternatifTOPSISController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Nilai Alternatif',
            'alternatif' => AlternatifTOPSISModel::where('user_id', auth()->user()->id)->with('penilaian.crips')->get(),
            'kriteria' => KriteriaTOPSISModel::where('user_id', auth()->user()->id)->with('crips')->orderBy('kode_kriteria')->get(),
            'crips' => CripsTOPSISModel::where('user_id', auth()->user()->id)->with('penilaian'),
            'jumlah' => KriteriaTOPSISModel::where('user_id', auth()->user()->id)->count(),


        ];
        // return response()->json($data['alternatif']);
        $crips = CripsTOPSISModel::where('user_id', auth()->user()->id)->get();


        if (count($crips) == 0 || count($data['alternatif']) == 0 || $data['jumlah'] == 0) {
            return redirect('metode/topsis/alternatif');
        }
        // return response()->json($data['alternatif']);
        return view('metode_topsis.nilai_alternatif.index', $data);
    }
    public function nilai_alternatif(Request $request)
    {
        $nilai = [];

        foreach ($request->crips_id as $key => $value) {
            $nilai[] = [

                'user_id' => auth()->user()->id,
                'alternatif_id' => $request->alternatif_id,
                'crips_id' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        // dd($nilai);

        NilaiAlternatifTOPSISModel::insert($nilai);

        return redirect('/metode/topsis/alternatif');
    }
    public function edit_nilai_topsis($id)
    {

        $id = $id;
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Alternatif',
            'alternatif' => AlternatifTOPSISModel::where('user_id', auth()->user()->id)->where('id', $id)->with('penilaian.crips')->get(),
            'kriteria' => KriteriaTOPSISModel::where('user_id', auth()->user()->id)->with('crips')->with('nilai')->orderBy('kode_kriteria')->get(),


        ];

        foreach ($data['alternatif'] as $item_1 => $key_1) {
            foreach ($key_1->penilaian as $item_2 => $key_2) {
                $ite[$key_2->crips->id] = $key_2->crips->nilai;
            }
        }
        // dd($ite);
        // return response()->json($data['kriteria']);
        return view('metode_topsis.alternatif.edit_nilai_alternatif', $data, compact('ite', 'id'));
    }
    public function edit_nilai_alternatif(Request $request)
    {
        $nilai = [];

        foreach ($request->crips_id as $key => $value) {
            $nilai[$key] = $value;
        }
        // dd($nilai);
        foreach ($nilai as $p => $o) {


            NilaiAlternatifTOPSISModel::updateOrCreate(
                [
                    'alternatif_id' => $request->alternatif_id,
                    'kriteria_id' => $p,
                ],
                [
                    'user_id' => auth()->user()->id,
                    'alternatif_id' => $request->alternatif_id,
                    'crips_id' => $o,
                    'kriteria_id' => $p
                ]
            );
        }



        return redirect('/metode/topsis/alternatif')->with('success', 'Data Berhasil Di Edit!');
    }
}
