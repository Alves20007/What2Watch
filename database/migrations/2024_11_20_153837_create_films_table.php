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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('Data')->nullable();
            $table->string('slug')->unique();
            $table->string('Falas')->nullable();
            $table->string('PCategoria')->nullable();
            $table->string('trailer')->nullable();
            $table->string('audio')->nullable();
            $table->string('sinopse')->nullable();
            $table->string('elenco')->nullable();
            $table->string('escolhido')->nullable();
            $table->string('top100')->nullable();
            $table->string('categoria');
            $table->string('tipo')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
