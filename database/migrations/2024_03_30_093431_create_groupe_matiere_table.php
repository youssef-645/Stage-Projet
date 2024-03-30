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
        Schema::create('groupe_matiere', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groupe_id');
            $table->unsignedBigInteger('matiere_id');
            $table->timestamps();
            $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupe_matiere');
    }
};
