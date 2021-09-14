<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';
    protected $fillable = ['alamat', 'nomor_hp', 'nama_toko'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
