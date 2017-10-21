<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTourPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_package', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id');
            $table->date('tour_start_date');
            $table->integer('place_total');
            $table->integer('place_for_sale');
            $table->integer('number_adult');
            $table->integer('number_child');
            $table->float('price_agency_adult');
            $table->float('price_agency_child');
            $table->float('price_client_adult');
            $table->float('price_client_child');
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
        Schema::dropIfExists('tour_package');
    }
}
