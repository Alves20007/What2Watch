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
        Schema::create('noticiafamosos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('Data');
            $table->text('noticia');
            $table->string('slug');
            $table->string('title noticia');
            $table->string('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticiafamosos');
    }
};
