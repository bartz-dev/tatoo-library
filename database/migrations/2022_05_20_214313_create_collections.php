<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollections extends Migration
{
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id('collection_id');
            $table->string('nom_court');
            $table->string('location');
            $table->string('description');
            $table->foreignId('artist_id')->references('artist_id')->on('artists');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
