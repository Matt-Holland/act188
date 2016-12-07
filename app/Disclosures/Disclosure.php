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
}
