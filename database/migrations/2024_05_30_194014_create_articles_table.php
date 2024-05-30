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
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // crea una colonna ID (unsigned big integer) con autoincremento (PrimaryKey)
            
            //Migrations: Available Column Types (Documentazione Laravel)
            
            //title
            $table->string('name', length: 50);

            //description
            $table->text('description'); //Non c'è bisogno di inserire il numero di caratteri per il testo, lo gestisce mysql
            
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
