<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatchFuturesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_futures', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('title');
            $table->string('team_one');
            $table->string('team_two');
            $table->string('image_one');
            $table->string('image_two');
            $table->string('match_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('match_futures');
    }
}
