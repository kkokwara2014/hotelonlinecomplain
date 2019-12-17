<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stafffriendliness');
            $table->string('efficiency');
            $table->string('securenviron');
            $table->string('cleanliness');
            $table->string('comfortable');
            $table->string('amenities');
            $table->string('workingcondition');
            $table->string('roomservice');
            $table->string('restaurant');
            $table->string('bar');
            $table->string('foodquality');
            $table->string('telephone');
            $table->string('laundry');
            $table->string('internet');
            $table->string('meetingroom');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->text('comment');
            $table->string('visitagain');
            $table->string('tellafriend');
            $table->string('rateus');
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
        Schema::dropIfExists('complains');
    }
}
