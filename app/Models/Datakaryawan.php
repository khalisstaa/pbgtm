<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datakaryawan extends Model
{
    //
    protected $table = "datakaryawans";
    protected $fillable = [
        'nama',
        'posisi',
        'kontak',
        'alamat',
    ];

    public function getAll()
    {
        return $this->hasMany(Karyawan::class, 'karyawan_id', 'id');
    }
    public function getToday()
    {
        return $this->hasMany(Karyawan::class, 'karyawan_id', 'id')->whereDate('created_at','=', now())->first();
    }
}
