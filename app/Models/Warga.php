<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'warga';

    // Cara Disebutkan field nya satu per satu
    // protected $fillable = [
    //     'nama',
    //     'nik',
    //     'no_kk',
    //     'jenis_kelamin',
    //     'alamat',
    // ];

    // cara cepat hanya id yg tidak bisa di input
    protected $guarded = ['id'];
}
