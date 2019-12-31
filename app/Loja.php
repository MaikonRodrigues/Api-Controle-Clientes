<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function endereco()
    {
        return $this->hasOne(endereco::class);
    }
    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }
}
