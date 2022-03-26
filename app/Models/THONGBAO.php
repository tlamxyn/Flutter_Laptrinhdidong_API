<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class THONGBAO extends Model
{
    use HasFactory;

    protected $table = 'thongbao';

    protected $primaryKey = 'ThongBaoID';

    protected $fillable = [
        'TieuDe',
        'TieuDeCon',
        'ThoiGian',
        'NoiDung',
        'KhachHangID',
    ];
}
