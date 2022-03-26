<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LOAISP extends Model
{
    use HasFactory;

    protected $table = 'loaisp';

    protected $fillable = [
        'TenLoai',
        'TrangThai',
    ];
}
