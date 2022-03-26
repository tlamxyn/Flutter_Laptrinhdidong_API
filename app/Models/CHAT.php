<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CHAT extends Model
{
    use HasFactory;

    protected $table = 'chat';

    protected $fillable = [
        'KhachHangID',
        'ThoiGian',
        'NoiDung',
    ];
}
