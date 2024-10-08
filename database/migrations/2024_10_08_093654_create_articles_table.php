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
            $table->id();
            $table->string('ref')->unique();
            $table->string('description');
            $table->decimal('prix_vent', 8, 2);
            $table->decimal('prix_route', 8, 2);
            $table->integer('quantite');
            $table->string('categorie');
            $table->string('sous_categorie')->nullable();
            $table->string('indicator_01')->nullable();
            $table->string('indicator_02')->nullable();
            $table->string('indicator_03')->nullable();
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
