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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->text('competences');
            $table->text('debouches');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->date('date_limite');
            $table->string('image')->nullable();
            $table->string('cohorte');
            $table->enum('statut', ['ouverte', 'fermée'])->default('ouverte');
            $table->unsignedBigInteger('personnel_id');
            $table->foreign('personnel_id')->references('id')->on('personnels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
