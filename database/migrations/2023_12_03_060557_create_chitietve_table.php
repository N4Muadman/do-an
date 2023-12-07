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
        Schema::create('chitietve', function (Blueprint $table) {
            $table->unsignedInteger('veId');
            $table->unsignedInteger('gheId');
            $table->primary(['veId', 'gheId']);
            $table->foreign('veId')->references('Id')->on('ve')->onDelete('cascade');
            $table->foreign('gheId')->references('Id')->on('ghe')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitietve');
    }
};
