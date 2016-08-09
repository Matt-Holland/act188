<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct_model_brand_namesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_model_brand_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DisclosureNumber');
            $table->string('ManufacturerName');
            $table->string('ChemicalName');
            $table->string('BrandName');
            $table->string('ProductModel');
            $table->string('DateTime');
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
        Schema::drop('product_model_brand_names');
    }
}
