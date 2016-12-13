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
class Disclosure extends Model
{
    protected $table = 'disclosures';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
