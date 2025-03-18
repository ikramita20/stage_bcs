<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin')->unique();
            $table->date('date_inscription');
            $table->date('date_naissance');
            $table->string('num_tel');
            $table->string('filiere');
            $table->date('date_depart');
            $table->date('date_fin');
            $table->integer('annee');
            $table->float('note_deplome')->nullable();
            $table->boolean('admis');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};