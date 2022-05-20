<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtists extends Migration
{
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id('artist_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('surnom')->unique();
            $table->integer('age');
            $table->string('contact_information');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
