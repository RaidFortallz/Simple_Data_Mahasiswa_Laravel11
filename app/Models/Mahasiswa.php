<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'nim',
        'jurusan',
        'jenis_kelamin',
        'agama',
        'alamat',
    ];
}
