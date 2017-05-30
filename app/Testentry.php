<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testentry extends Model
{
    // define table explicitly, in case not using "snake case" breaks it
    protected $table = 'testentries';
    protected $fillable = array('field_1','field_2','field_3');

}
