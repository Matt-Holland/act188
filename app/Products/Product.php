<?php

namespace App\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $with = ['disclosures'];

    public function disclosures()
    {
        return $this->hasMany(Disclosure::class);
    }
}
