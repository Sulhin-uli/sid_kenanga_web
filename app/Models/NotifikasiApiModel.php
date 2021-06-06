<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifikasiApiModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'notifikasi';
    protected $fillable = [
        'nik',
        'nama',
        'aksi',
        'status',
        'alasan',
    ];
}
