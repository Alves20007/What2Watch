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
            $table->string('image');
            $table->string('Data');
            $table->string('slug');
            $table->string('Falas');
            $table->string('PCategoria')->nullable();
            $table->string('trailer')->nullable();
            $table->string('audio')->nullable();
            $table->string('sinopse')->nullable();
            $table->string('elenco')->nullable();
            //$table->foreign('categoria'); 
            $table->string('categoria')->nullable();
            
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
