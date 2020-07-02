<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['date', 'customer_id', 'lawn', 'trees', 'rubble','comment'];
     /**
     * Returns Customer
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
