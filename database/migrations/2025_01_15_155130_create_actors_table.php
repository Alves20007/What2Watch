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
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string("FullName")->nullable();
            $table->string("Frase")->nullable();
            $table->string("Slug")->nullable();
            $table->string("idade")->nullable();
            $table->string("Historia")->nullable();
            $table->string("Name")->nullable();
            $table->string("birthday")->nullable();
            $table->string("image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
