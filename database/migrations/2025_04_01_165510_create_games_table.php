<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) 
        {
            $table->id();
            $table->string('nome');
            $table->string('genero');
            $table->string('plataforma');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
}