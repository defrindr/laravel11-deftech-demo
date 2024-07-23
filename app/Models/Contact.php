<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Tambahkan attribute table
    // sesuaikan dengan nama table yang ada di migration
    protected $table = 'contact';

    // Tambahkan attribute fillable
    // kemudian buat array, yang berisi semua kolom yang dapat diubah oleh pengguna aplikasi
    protected $fillable = ["name", "phone"];
}
