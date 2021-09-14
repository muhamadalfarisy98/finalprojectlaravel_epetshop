<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['nama_barang', 'harga', 'stock_quantity', 'image', 
        'keterangan', 'uom_id'];

    public function uom()
    {
        return $this->belongsTo('App\Uom');
    }
    public function review()
    {
        return $this->hasMany('App\Review');
    }
    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail');
    }


    
}
