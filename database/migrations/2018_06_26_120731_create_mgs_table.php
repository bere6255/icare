<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seeker');
            $table->string('provider');
            $table->string('msg_ID');
            $table->string('title');
            $table->string('msg');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('status');
            $table->string('seeker_action');
            $table->string('provider_action');
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
        Schema::dropIfExists('mgs');
    }
}
