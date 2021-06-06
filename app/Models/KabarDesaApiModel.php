<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabarDesaApiModel extends Model
{
    use HasFactory;
    protected $table = 'kabar_desa';
    
    public function allData()
    {
        return DB::select('select * from kabar_desa ORDER BY id_kabar_desa DESC');
    }
}
