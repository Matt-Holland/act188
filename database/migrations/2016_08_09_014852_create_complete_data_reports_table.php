<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompleteDataReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complete_data_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DisclosureID');
            $table->string('ChemicalName');
            $table->string('ChemicalFunction');
            $table->string('Component');
            $table->string('Concentration');
            $table->string('Brick');
            $table->string('TradeSecretDesc');
            $table->string('SubmittedBy');
            $table->string('DateTime');
            $table->string('ManufacturerID');
            $table->string('ManufacturerName');
            $table->string('PhysicalAddressofManufacturer');
            $table->string('ManufacturerContactPerson');
            $table->string('ManufacturerContactPersonAddress');
            $table->string('ManufacturerContactEmailAddress');
            $table->string('ManufacturerContactPhoneNumber');
            $table->string('TradeAssociationID');
            $table->string('TradeAssociationName');
            $table->string('PhysicalAddressofTradeAssociation');
            $table->string('TradeAssociationContactPerson');
            $table->string('TradeAssociationContactPersonAddress');
            $table->string('TradeAssociationEmailAddress');
            $table->string('TradeAssociationPhoneNumber');
            $table->timestamps();
        });
    }

    /***
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('complete_data_reports');
    }
}
