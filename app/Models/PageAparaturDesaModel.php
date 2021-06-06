<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PageAparaturDesaModel extends Model
{
    protected $table = 'aparaturdesa';
    public function allData()
    {
        return DB::table('aparaturdesa')->get();
    }

}
