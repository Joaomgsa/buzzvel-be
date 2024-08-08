<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('trip_id');
            $table->unsignedBigInteger('person_id');
            $table->date('date');
            $table->string('description');
            $table->timestamps();

            $table->foreign('trip_id')->references('id')->on('trips');
            $table->foreign('person_id')->references('id')->on('persons');
            $table->unique(['trip_id','person_id','date']);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
