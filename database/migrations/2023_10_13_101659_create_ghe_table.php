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
        Schema::create('ghe', function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedInteger('PhongId');
            $table->string('Ten', 10);
            $table->string('Hang', 10);
            $table->string('idFor', 10);
            $table->string('class', 50);
            $table->string('disable', 50)->nullable();
            $table->foreign('PhongId')->references('Id')->on('phong')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ghe');
    }
};
