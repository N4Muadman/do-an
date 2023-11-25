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
        Schema::create('chinhanh', function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedInteger('KhuVucId');
            $table->string('Ten', 100);
            $table->string('DiaChi', 150);
            $table->string('img', 100);
            $table->text('MoTa');
            $table->timestamps();
            $table->foreign('KhuVucId')->references('Id')->on('khuvuc')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chinhanh');
    }
};
