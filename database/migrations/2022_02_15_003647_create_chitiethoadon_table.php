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
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->bigInteger('HoaDonID', false, true);
            $table->foreign('HoaDonID')->references('HoaDonID')->on('hoadon');
            $table->bigInteger('SanPhamID', false, true);
            $table->foreign('SanPhamID')->references('SanPhamID')->on('sanpham');
            $table->unsignedInteger('SoLuong');
            $table->unsignedInteger('DonGia');
            $table->boolean('TrangThai');
            $table->timestamps();
            $table->primary(['HoaDonID', 'SanPhamID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadon');
    }
};
