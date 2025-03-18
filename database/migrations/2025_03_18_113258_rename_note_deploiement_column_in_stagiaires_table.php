<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('stagiaires', function (Blueprint $table) {
            $table->renameColumn('note_deploiement', 'note_deplome');
        });
    }
    
    public function down()
    {
        Schema::table('stagiaires', function (Blueprint $table) {
            $table->renameColumn('note_deplome', 'note_deploiement');
        });
    }
};
