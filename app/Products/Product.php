<?php

namespace App\Products;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property string manufacturer
 * @property string brand
 * @property string model
 * @property string chemical_name
 */
class Product extends Model
{
    protected $table = 'products';

    protected $with = ['disclosures'];

    public function disclosures()
    {
        return $this->hasMany(Disclosure::class);
    }
}
