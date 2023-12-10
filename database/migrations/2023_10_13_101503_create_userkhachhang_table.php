<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('userkhachhang', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('TenDangNhap', 50);
            $table->string('MatKhau', 255);
            $table->string('Email', 50);
            $table->string('HoTen', 50)->nullable();
            $table->string('SDT', 20)->nullable();
            $table->boolean('IsActive');
            $table->string('Img', 50);
            $table->integer('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userkhachhang');
    }
};
