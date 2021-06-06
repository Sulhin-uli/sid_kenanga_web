<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NotifModel extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::select('select * from notifikasi ORDER BY id_notifikasi DESC');
    }
}
