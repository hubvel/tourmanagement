<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTours extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('images', 250);
            $table->text('details');
            $table->string('duration', 100);
            $table->string('vehicles', 250);
            $table->text('start_place');
            $table->text('end_place');
            $table->text('inclusions');
            $table->text('common_policies');
            $table->text('agency_policies');
            $table->boolean('show_for_agency');
            $table->boolean('show_for_customer');
            $table->integer('user_id');
            $table->enum('status', ['open', 'close']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tours');
    }

}
