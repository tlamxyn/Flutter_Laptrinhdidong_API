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
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->bigIncrements('KhachHangID');
            $table->string('HoTen');
            $table->string('MatKhau');
            $table->date('NgaySinh');
            $table->string('DiaChi');
            $table->string('SDT', 11)->unique();
            $table->string('Email')->unique();
            $table->string('GioiTinh');
            $table->boolean('LaAdmin');
            $table->string('TenDangNhap');
            $table->boolean('TrangThai');
            $table->string('Anh');
            $table->rememberToken();
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
        Schema::dropIfExists('taikhoan');
    }
};
