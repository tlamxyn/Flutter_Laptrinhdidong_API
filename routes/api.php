<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APISanphamController;
use App\Http\Controllers\API\APITaikhoanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('danhsach/sanpham', [APISanphamController::class, 'layDanhsach']);
Route::get('sanpham/{id}', [APISanphamController::class, 'chitietSanpham']);
//Route::get('sanpham/{id}/{number}', [APISanphamController::class, 'capnhat_soluongSanpham']);
Route::get('image/sanpham/{id}', [APISanphamController::class, 'layAnhSP']);


Route::get('taikhoan/{id}', [APITaikhoanController::class, 'chitiettaikhoan']);
Route::get('image/taikhoan/{id}', [APITaikhoanController::class, 'layAnhTK']);
