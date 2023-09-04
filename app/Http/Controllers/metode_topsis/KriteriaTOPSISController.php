<?php

namespace App\Http\Controllers\metode_topsis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\metode_topsis\CripsTOPSISModel;
use App\Models\metode_topsis\KriteriaTOPSISModel;
use App\Models\metode_topsis\NilaiAlternatifTOPSISModel;

class KriteriaTOPSISController extends Controller
{
    public function kriteria_topsis()
    {
        $data = [
            'title' => 'Testing Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Kriteria',
            'kriteria' => DB::table('kriteria_topsis')->select('*')->where('user_id', auth()->user()->id)->get()
        ];
        return view('metode_topsis.kriteria.kriteria', $data);
    }
    public function crips_topsis($id)
    {
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Kriteria',
            'crips' => CripsTOPSISModel::where('kriteria_id', $id)->where('user_id', auth()->user()->id)->get(),
            'kriteria' => DB::table('kriteria_topsis')->select('*')->where('id', $id)->where('user_id', auth()->user()->id)->first()
        ];

        return view('metode_topsis.kriteria.crips', $data);
    }
    public function tambah_crips($id)
    {

        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Kriteria',

            'kriteria' => DB::table('kriteria_topsis')->select('*')->where('id', $id)->where('user_id', auth()->user()->id)->first()
        ];

        return view('metode_topsis.kriteria.tambah_crips', $data);
    }
    public function tambah_kriteria_crips(Request $request, $id)
    {
        CripsTOPSISModel::create([
            'kriteria_id' => $request->id,
            'user_id' => auth()->user()->id,
            'nama_kriteria' => ucwords($request->nama_kriteria),
            'crips' => ucwords($request->crips),
            'nilai' => $request->nilai
        ]);
        return redirect('/metode/topsis/crips/' . $id)->with('success', 'Data Berhasil Ditambah!');
    }
    public function tambah_kriteria_topsis()
    {
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Kriteria',


        ];
        $q = DB::table('kriteria_topsis')->select(DB::raw('MAX(RIGHT(kode_kriteria,1)) as kode'))->where('user_id', auth()->user()->id);
        $kd = "";
        if ($q->count() > 0) {

            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd = sprintf('%01s', $tmp);
            }
        } else {
            $kd = "1";
        }
        return view('metode_topsis.kriteria.tambah_kriteria', $data, compact('kd'));
    }
    public function tambah_kriteria(Request $request)
    {

        KriteriaTOPSISModel::create([
            'kode_kriteria' => $request->kode_kriteria,
            'user_id' => auth()->user()->id,
            'nama_kriteria' => ucwords($request->nama_kriteria),
            'atribut_kriteria' => $request->atribut_kriteria,
            'bobot' => $request->bobot
        ]);
        return redirect('/metode/topsis/kriteria/')->with('success', 'Data Berhasil Ditambah!');
    }
    public function edit_kriteria($id)
    {
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Kriteria',

            'kriteria' => DB::table('kriteria_topsis')->select('*')->where('id', $id)->where('user_id', auth()->user()->id)->first()
        ];
        return view('metode_topsis.kriteria.edit_kriteria', $data);
    }
    public function edit_kriteria_topsis(Request $request, $id)
    {
        KriteriaTOPSISModel::where('id', $id)->update([
            'nama_kriteria' => $request->nama_kriteria,
            'atribut_kriteria' => $request->atribut_kriteria,
            'bobot' => $request->bobot,
        ]);
        return redirect('metode/topsis/kriteria');
    }
    public function edit_crips($id)
    {
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Kriteria',
            'crips' => CripsTOPSISModel::join('kriteria_topsis', 'kriteria_topsis.id', '=', 'crips_topsis.kriteria_id')->find($id),

        ];
        // dd($data['crips']);

        return view('metode_topsis.kriteria.edit_crips', $data);
    }
    public function edit_crips_topsis(Request $request, $id)
    {
        // $kriteria = DB::table('kriteria_topsis')->select('id')->where('user_id', auth()->user()->id)->first();
        CripsTOPSISModel::where('id', $id)->update([
            'crips' => $request->crips,
            'nilai' => $request->nilai,
        ]);
        return redirect('/metode/topsis/crips/' . $request->kriteria_id)->with('success', 'Data Berhasil Diedit!');
    }
    public function hapus_kriteria_topsis($id)
    {
        KriteriaTOPSISModel::where('id', $id)->delete();
        CripsTOPSISModel::where('kriteria_id', $id)->delete();
        NilaiAlternatifTOPSISModel::where('kriteria_id', $id)->delete();
        return redirect('/metode/topsis/kriteria')->with('success', 'Data Berhasil Dihapus!');
    }
}
