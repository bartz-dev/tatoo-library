<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsCollections extends Migration
{
    public function up()
    {
        Schema::create('tags_collections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collection_id')->references('collection_id')->on('collections');
            $table->foreignId('tag_id')->references('tag_id')->on('tags');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags_collections');
    }
}
