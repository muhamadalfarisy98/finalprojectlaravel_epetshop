<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = ['provider', 'image',];

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
