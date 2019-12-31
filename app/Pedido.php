<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function loja()
    {
        return $this->hasOne(Loja::class);
    }
    public function produto()
    {
        return $this->hasMany(Produto::class);
    }
   
}
