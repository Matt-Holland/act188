<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGtinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtin', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('manufacturer');
            $table->string('brand');
            $table->string('model');
            $table->string('gtin');
        });

        DB::statement("ALTER TABLE gtin ADD productstring varchar(255) GENERATED ALWAYS AS (concat(manufacturer,brand,model)) STORED");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gtin');
    }
}
