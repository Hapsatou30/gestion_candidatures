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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidat_id');
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
            $table->enum('etat', ['en_attente', 'accepté', 'rejeté'])->default('en_attente');
            $table->text('motivation');
            $table->text('biographie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
