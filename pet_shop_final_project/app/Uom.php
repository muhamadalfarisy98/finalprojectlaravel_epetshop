<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    protected $table = 'uom';
    protected $fillable = ['nama_unit'];

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
