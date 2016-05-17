<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemicalLookupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemical_lookup', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('chemical_id');
            $table->integer('chemical_ppm');
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
        Schema::drop('chemical_lookup');
    }
}
