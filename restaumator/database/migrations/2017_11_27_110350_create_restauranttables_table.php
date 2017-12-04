<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestauranttablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restauranttables', function (Blueprint $table) {
            $table->increments('id');
            $table->time("activated_at");
            $table->integer("time_drink");
            $table->integer("time_bill");
            $table->integer("tablenumber");
            $table->integer("active_drink");
            $table->integer("active_bill");
            $table->unsignedInteger('id_restaurants');
            $table->foreign('id_restaurants')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restauranttables');
    }
}
