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
        Schema::create('binhluan', function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedInteger('KhachHangId');
            $table->unsignedInteger('PhimId');
            $table->text('NoiDung');
            $table->unsignedInteger('TrangThai');
            $table->foreign('KhachHangId')->references('Id')->on('userkhachhang')->onDelete('cascade');
            $table->foreign('PhimId')->references('Id')->on('phim')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binhluan');
    }
};
