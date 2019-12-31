<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function loja()
    {
        return $this->hasOne(Loja::class);
    }
}
