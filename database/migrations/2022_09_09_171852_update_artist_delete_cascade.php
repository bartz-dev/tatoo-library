<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArtistDeleteCascade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags_artist', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->foreign('artist_id')->references('artist_id')->on('artists')->onDelete('cascade');
        });

        Schema::table('collections', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->foreign('artist_id')->references('artist_id')->on('artists')->onDelete('cascade');
        });

        Schema::table('collections', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->foreign('artist_id')->references('artist_id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
