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
        Schema::create('phim', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Ten', 100);
            $table->string('ThoiLuongChieu', 20);
            $table->string('img', 100);
            $table->date('NgayKhoiChieu');
            $table->string('TheLoai', 50);
            $table->string('QuocGia', 50);
            $table->string('Trailer', 100);
            $table->string('DaoDien', 100);
            $table->string('DienVien', 100);
            $table->text('NoiDung');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phim');
    }
};
