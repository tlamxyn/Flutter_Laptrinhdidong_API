<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SANPHAM extends Model
{
    use HasFactory;

    protected $table = 'sanpham';

    protected $primaryKey = 'SanPhamID';

    protected $fillable = [
        'TenSP',
        'DonGia',
        'LoaiSPID',
        'TrangThai',
    ];
}
