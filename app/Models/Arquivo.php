<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table = 'arquivo';

    public function user()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }   
}
