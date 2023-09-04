<?php

namespace App\Http\Controllers\metode_topsis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\metode_topsis\KriteriaTOPSISModel;
use App\Models\metode_topsis\AlternatifTOPSISModel;
use App\Models\metode_topsis\NilaiAlternatifTOPSISModel;

class AlternatifTOPSISController extends Controller
{
    public function alternatif_topsis()
    {
        $kriteria = DB::table('kriteria_topsis')->select('id', 'kode_kriteria', 'nama_kriteria')->get();
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Alternatif',
            'alternatif' => AlternatifTOPSISModel::where('user_id', auth()->user()->id)->with('penilaian.crips')->get(),
            'kriteria' => KriteriaTOPSISModel::where('user_id', auth()->user()->id)->with('crips')->orderBy('kode_kriteria')->get(),
            'nilai' => KriteriaTOPSISModel::where('user_id', auth()->user()->id)->with('nilai')->with('crips')

        ];
        // return response()->json($data['alternatif']);

        foreach ($data['alternatif'] as $key => $value) {

            foreach ($value->penilaian as $key_2 => $value_2) {
                $count[$value->kode_alternatif][] = $value_2->id;
            }
        }
        foreach ($count as $key => $value) {
            $hitung[$key][] = count($value);
        }
        // return response()->json($data['kriteria']);

        return view('metode_topsis.alternatif.alternatif', $data, compact('kriteria', 'hitung'));
    }
    public function tambah_alternatif()
    {
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Alternatif',
            'alternatif' => DB::table('alternatif_topsis')->select('*')->where('user_id', auth()->user()->id)->get()
        ];
        $q = DB::table('alternatif_topsis')->select(DB::raw('MAX(RIGHT(kode_alternatif,2)) as kode'))->where('user_id', auth()->user()->id);
        $kd = "";
        if ($q->count() > 0) {

            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd = sprintf('%02s', $tmp);
            }
        } else {
            $kd = "1";
        }
        return view('metode_topsis.alternatif.tambah_alternatif', $data, compact('kd'));
    }
    public function tambah_alternatif_topsis(Request $request)
    {
        AlternatifTOPSISModel::create([
            'kode_alternatif' => $request->kode_alternatif,
            'user_id' => auth()->user()->id,
            'nama_alternatif' => $request->nama_alternatif
        ]);
        return redirect('/metode/topsis/alternatif')->with('success', 'Data Berhasil Ditambahkan!');
    }
    public function edit_alternatif($id)
    {
        $data = [
            'title' => 'Metode SPK',
            'sub_title' => 'TOPSIS',
            'menu' => 'Data Alternatif',
            'alternatif' => DB::table('alternatif_topsis')->select('*')->where('id', $id)->where('user_id', auth()->user()->id)->first(),
        ];
        return view('metode_topsis.alternatif.edit_alternatif_topsis', $data);
    }
    public function edit_alternatif_topsis(Request $request, $id)
    {

        AlternatifTOPSISModel::where('id', $id)->where('user_id', auth()->user()->id)->update([
            'nama_alternatif' => $request->nama_alternatif
        ]);
        return redirect('/metode/topsis/alternatif')->with('success', 'Data Berhasil Diedit!');
    }
    public function hapus_alternatif_topsis($id)
    {
        AlternatifTOPSISModel::where('id', $id)->delete();
        NilaiAlternatifTOPSISModel::where('alternatif_id', $id)->delete();
        return redirect('/metode/topsis/alternatif')->with('success', 'Data Berhasil Dihapus!');
    }
}
