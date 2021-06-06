<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AkunModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function allData()
    {
        return DB::select('select * from users where is_admin = :is_admin', ['is_admin' => 0]);
    }

    public function addData($data)
    {
        return DB::table('users')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        return DB::table('users')
            ->where('id', $id)
            ->update($data);
    }

    public function deleteData($id)
    {
        return DB::table('users')
            ->where('id', $id)
            ->delete();
    }

    public function deleteSelectData($data)
    {
        return DB::table('users')
            ->whereIn('id', $data)
            ->delete();
    }
}
