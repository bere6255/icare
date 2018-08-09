<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeekersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('users_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('genotype');
            $table->string('age');
            $table->string('asthmatic');
            $table->string('epileptic');
            $table->string('operation');
            $table->string('allergic');
            $table->string('weigh');
            $table->string('img');
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
        Schema::dropIfExists('seekers_details');
    }
}
