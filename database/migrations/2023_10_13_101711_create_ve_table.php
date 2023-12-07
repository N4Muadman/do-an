<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ve', function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedInteger('KhachHangId');
            $table->unsignedInteger('LichChieuId');
            $table->string('MaQR');
            $table->string('MoTa')->nullable();
            $table->dateTime('ThoiGiaDat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('total', 10, 0);
            $table->foreign('KhachHangId')->references('Id')->on('userkhachhang')->onDelete('cascade');
            $table->foreign('LichChieuId')->references('Id')->on('lichchieu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ve');
    }
};
