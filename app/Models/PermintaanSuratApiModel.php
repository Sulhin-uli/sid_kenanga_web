<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanSuratApiModel extends Model
{
    use HasFactory;
    protected $table = 'permintaan_surat';
    protected $fillable = [
        'nik',
        'nama_penduduk',
        'nama_surat',
        'tgl',
        'status',
        'text1',
        'text2',
        'text3',
        'text4',
        'text5',
        'text6',
        'text7',
        'text8',
        'text9',
        'text10',
        'text11',
        'text12',
        'text13',
        'text14',
        'text15',
        'text16',
        'text17',
        'text18',
        'text19',
        'text20',
    ];
}
