<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TAIKHOAN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APITaikhoanController extends Controller
{
    function DangNhap(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Email' => 'required|string|unique:taikhoan',
            'Password' => 'required|string|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $taikhoan = TAIKHOAN::where('Email', $request->Email)->where('MatKhau', $request->Password)->first();

        if($taikhoan->count() == 0) {
            return json_encode([
                'success' => false,
                'data' => 'Đăng nhập thất bại'
            ]);
        }

        return json_encode([
            'success' => true,
            'message' => 'Đăng nhập thành công'
        ]);
    }

    function DangKy(Request $request)
    {
        //Confirmed
        //The field under validation must have a matching field of Password_confirmation.
        //For example, if the field under validation is 'password', a matching 'password_confirmation' field must be present in the input.

        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string',
            'Email' => 'required|string|unique:taikhoan',
            'Password' => 'required|string|confirmed|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $taikhoan = new TAIKHOAN();

        $taikhoan->HoTen = $request->Ten;
        $taikhoan->Email = $request->Email;
        $taikhoan->MatKhau = $request->Password;

        $taikhoan->save();

        return json_encode([
            'success' => true,
            'message' => 'Đăng ký thành công'
        ]);
    }

    function chitiettaikhoan($id)
    {
        $taikhoan = TAIKHOAN::find($id);
        if ($taikhoan->count() == 0) {
            return json_encode([
                'success' => false,
                'message' => 'Không tìm thấy tài khoản cần tìm'
            ]);
        }

        return json_encode([
            'success' => true,
            'data' => $taikhoan
        ]);
    }

    function layAnhTK($id)
    {
        $path = public_path() . '/uploads/images/taikhoan/tk_' . $id . '.jpg';
        return response()->file($path);
    }
}
