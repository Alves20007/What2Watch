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
            $table->string('participou')->nullable();
            $table->string('banner')->nullable();
            $table->string('trailer')->nullable();
            $table->string('sinopse')->nullable();
            $table->string('escolhido')->nullable();
            $table->string('categoria')->nullable();
            $table->string('tipo')->nullable();
            $table->string('Episodios')->nullable();
            $table->string('Temporadas')->nullable();
            $table->string('oscares')->nullable();
            $table->string('Diretor')->nullable();
            $table->string('Editora')->nullable();
            $table->string('Elenco')->nullable();
            $table->string('criador')->nullable();
            $table->string('CE')->nullable();//Isto é a minha clasificaçao eteraria eu do futuro

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
