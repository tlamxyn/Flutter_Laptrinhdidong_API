<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TAIKHOAN extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'HoTen',
        'MatKhau',
        'Email',
        'SDT',
    ];

    protected $hidden = [
        'MatKhau',
        'remember_token',
    ];

    protected $table = 'taikhoan';

    protected $primaryKey = 'KhachHangID';
}
