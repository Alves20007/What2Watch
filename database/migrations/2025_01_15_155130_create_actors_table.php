<?php

use App\Models\Actor;
use App\Models\Category;
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
            $table->unique("Slug")->nullable();
            $table->string("idade")->nullable();
            $table->string("Historia")->nullable();
            $table->string("Name")->nullable();
            $table->string("birthday")->nullable();
            $table->string('country')->nullable();
            $table->string('cidade')->nullable();
            $table->string('height')->nullable();
            $table->string("image")->nullable();
            $table->string("Oscares")->nullable();
            $table->string("Top")->nullable();
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
