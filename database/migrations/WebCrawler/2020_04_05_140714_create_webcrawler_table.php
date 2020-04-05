<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebcrawlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webcrawler', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('constellation', 3);
            $table->string('overall_score', 9);
            $table->string('overall_description', 500);
            $table->string('love_score', 9);
            $table->string('love_description', 500);
            $table->string('work_score', 9);
            $table->string('work_description', 500);
            $table->string('fortune_score', 9);
            $table->string('fortune_description', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webcrawler');
    }
}
