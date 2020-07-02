<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['fullname', 'number'];

     /**
     * Return Services related to Customer
     */
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
