<?php

namespace App\Disclosures;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property string manufacturer
 * @property string brand
 * @property string model
 * @property string chemical_name
 */
class Disclosure extends Model
{
    protected $table = 'disclosures';

    public function getBrand()
    {
        return $this->brand;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getChemical()
    {
        return $this->getChemical();
    }
}
