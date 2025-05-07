<?php

use App\Models\Actor;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {   
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string("FullName")->nullable();
            $table->string("Frase")->nullable();
            $table->string("sexo")->nullable();
            $table->string("Slug")->nullable();
            $table->string("banner")->nullable();
            $table->string("idade")->nullable();
            $table->string('falecimento')->nullable(); 
            $table->text("bio")->nullable();
            $table->string("Name")->nullable();
            $table->string("birthday")->nullable();
            $table->string('country')->nullable();
            $table->string('height')->nullable();
            $table->string("image")->nullable();
            $table->string("Oscares")->nullable();
            $table->string("profissao")->nullable();
            $table->string("personagem")->nullable();
            $table->timestamps();
        });

        Schema::create('actor_category', function (Blueprint $table) {
            $table->foreignIdFor(Actor::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
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
