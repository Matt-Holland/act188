<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTable extends Migration
{
    public function up()
    {
        Schema::create('disclosures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer');
            $table->string('brand');
            $table->string('model');
            $table->string('chemical_name');
        });
    }

    public function down()
    {
        Schema::drop('disclosures');
    }
}
