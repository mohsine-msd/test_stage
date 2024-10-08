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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->string('ref');
            $table->string('ref_articl')->nullable();
            $table->string('nom_client'); 
            $table->date('date_vente'); 
            $table->decimal('prix_vente', 8, 2); 
            $table->string('indicator_01');
            
            $table->foreign('ref_articl')
                  ->references('ref') 
                  ->on('articles')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventes');
    }
};
