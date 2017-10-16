<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tour_title');
            $table->text('tour_details');
            $table->string('tour_image');
            $table->string('tour_duration');
            $table->string('tour_vehicles');
            $table->string('tour_start_place');
            $table->string('tour_end_place');
            $table->text('tour_inclusion');
            $table->text('tour_common_policies');
            $table->text('tour_agency_policies');
            $table->integer('show_for_agency');
            $table->integer('show_for_customer');
            $table->integer('user_id');
            $table->integer('status');

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
        Schema::dropIfExists('tours');
    }
}
