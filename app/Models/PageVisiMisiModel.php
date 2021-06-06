<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PageVisiMisiModel extends Model
{
    protected $table = 'visimisi';
    public function allData()
    {
        return DB::table('visimisi')->get();
    }

}
