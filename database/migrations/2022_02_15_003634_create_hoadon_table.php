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
        Schema::create('hoadon', function (Blueprint $table) {
            $table->bigIncrements('HoaDonID');
            $table->bigInteger('KhachHangID');
            $table->date('NgayLap');
            $table->longText('DiaChiNhan');
            $table->string('SDTNhan', 11);
            $table->unsignedInteger('TongThanhToan');
            $table->string('TinhTrang');
            $table->boolean('TrangThai');
            $table->string('TenNguoiNhan');
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
        Schema::dropIfExists('hoadon');
    }
};
