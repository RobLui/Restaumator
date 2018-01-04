<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAveragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averages', function (Blueprint $table) {
            $table->increments('id');
            $table->time("bill_time")->nullable();
            $table->time("drink_time")->nullable();
            $table->unsignedInteger('id_restaurants');
            $table->foreign('id_restaurants')
                ->references('id')
                ->on('restaurants')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('average');
    }
}
