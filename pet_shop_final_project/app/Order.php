<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['status', 'order_date', 'kode_pesanan', 'total_harga', 'shipping_address', 'user_id', 'payment_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
