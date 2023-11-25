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
        Schema::create('lichchieu', function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedInteger('PhimId');
            $table->unsignedInteger('PhongId');
            $table->string('Gia', 50);
            $table->string('Mota', 50)->nullable();
            $table->string('Ngay');
            $table->string('GioBatDau');
            $table->integer('TrangThai');
            $table->foreign('PhimId')->references('Id')->on('phim')->onDelete('cascade');
            $table->foreign('PhongId')->references('Id')->on('phong')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lichchieu');
    }
};
