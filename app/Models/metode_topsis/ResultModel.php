<?php

namespace App\Models\metode_topsis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultModel extends Model
{
    use HasFactory;

    protected $table = 'result';
    protected $fillable = ['alternatif_id', 'tahun_awal', 'tahun_akhir',];
}
