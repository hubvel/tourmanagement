<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id');
            $table->date('tour_start_date');
            $table->integer('total_number_of_places');
            $table->integer('number_of_sale_places');
            $table->integer('number_adult');
            $table->integer('number_children');
            $table->decimal('price_for_agency_adult');
            $table->decimal('price_for_client_children');
            $table->decimal('price_for_client_adult');
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
        Schema::dropIfExists('package_prices');
    }
}
