<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giohang', function (Blueprint $table) {
            $table->bigInteger('KhachHangID',false, true);
            $table->foreign('KhachHangID')->references('KhachHangID')->on('taikhoan');
            $table->bigInteger('SanPhamID',false, true);
            $table->foreign('SanPhamID')->references('SanPhamID')->on('sanpham');
            $table->unsignedInteger('SoLuong');
            $table->timestamps();
            $table->primary(['KhachHangID', 'SanPhamID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giohang');
    }
};
