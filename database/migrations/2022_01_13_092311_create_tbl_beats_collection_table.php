<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBeatsCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_beats_collection', function (Blueprint $table) {
            $table->id();
            $table->string('beat_title')->nullable();
            $table->string('beat_type')->nullable();
            $table->string('beat_tempo')->nullable();
            $table->string('beat_genre')->nullable();
            $table->longText('beat_description')->nullable();
            $table->longText('beat_image')->nullable();
            $table->longText('beat_mp3')->nullable();
            $table->double('beat_price')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_beats_collection');
    }
}
