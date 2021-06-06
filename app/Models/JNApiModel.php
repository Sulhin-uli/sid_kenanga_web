<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JNApiModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'jumlah_notif';
    protected $fillable = [
        'ket',
    ];
}
