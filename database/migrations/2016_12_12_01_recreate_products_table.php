<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecreateProductsTable extends Migration
{
    public function up()
    {
        Schema::drop('products');
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer');
            $table->string('brand');
            $table->string('model');
            $table->string('gtin')->nullable();
        });
        Schema::table('disclosures', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
        });

        $products = DB::select('select distinct `model`,`manufacturer`,`brand` from `disclosures`');
        foreach ($products as $product) {
            $productData = [
                $product->model,
                $product->manufacturer,
                $product->brand,
            ];
            DB::insert('insert into products (model, manufacturer, brand) values (?, ?, ?)', $productData);
            $id = DB::select('select id from products where model = ? and manufacturer = ? and brand = ?', $productData)[0]->id;
            DB::update('update disclosures set product_id = ? where model = ? and manufacturer = ? and brand = ?',
                array_merge([$id], $productData)
            );
        }

        Schema::table('disclosures', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
           $table->dropColumn('manufacturer');
           $table->dropColumn('brand');
           $table->dropColumn('model');
        });
    }

    public function down()
    {
        Schema::drop('products');
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GTIN');
            $table->char('product_name');
            $table->char('brick_code');
            $table->text('product_description');
            $table->integer('product_id');
            $table->timestamps();
        });

        Schema::table('disclosures', function (Blueprint $table) {
            $table->string('manufacturer');
            $table->string('brand');
            $table->string('model');
        });
    }
}
