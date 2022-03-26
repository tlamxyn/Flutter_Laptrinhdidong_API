<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SANPHAM;
use Illuminate\Http\Request;

class APISanphamController extends Controller
{
    function layDanhsach()
    {
        $danhsach_sanpham = SANPHAM::all();
        return json_encode([
            'success' => true,
            'data' => $danhsach_sanpham
        ]);
    }

    function chitietSanpham($id)
    {
        $sanpham = SANPHAM::find($id);
        if ($sanpham->count() == 0) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy sản phẩm có ID: ' . $id
            ]);
        }

        return json_encode([
            'success' => true,
            'data' => $sanpham
        ]);
    }

    function capnhat_soluongSanpham($id, $number)
    {
        $sanpham = SANPHAM::find($id);
        if ($sanpham->count() == 0) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy sản phẩm có ID: ' . $id
            ]);
        }
        $sanpham->HangTonKho -= $number;
        $sanpham->DaBan += $number;


        $sanpham->save();

        return json_encode([
            'success' => true,
            'message' => 'Đã cập nhật'
        ]);
    }

    function layAnhSP($id)
    {
        $path = public_path() . '/uploads/images/sanpham/sp_' . $id . '.jpg';
        return response()->file($path);
    }
}
