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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('SanPhamID');
            $table->string('TenSP');
            $table->unsignedInteger('DonGia');
            $table->unsignedInteger('GiamGia');
            $table->unsignedInteger('HangTonKho');
            $table->longText('MoTa');
            $table->bigInteger('LoaiSPID');
            $table->string('Anh');
            $table->unsignedInteger('DaBan');
            $table->string('ThuongHieu');
            $table->boolean('TrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
};
