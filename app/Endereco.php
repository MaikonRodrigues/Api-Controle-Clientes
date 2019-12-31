<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }
    
}
