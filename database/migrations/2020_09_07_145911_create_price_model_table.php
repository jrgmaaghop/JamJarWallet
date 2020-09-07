<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_models', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name');
            $table->string('desc');
            $table->timestamps();
        });

        Schema::table('product_prices', function (Blueprint $table) {
            $table->smallInteger('price_model_id')->unsigned();
            $table->foreign('price_model_id')->on('price_models')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_model');
    }
}
