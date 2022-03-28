<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    //Relación invertida perfil-usuario para
    public function perfilUser(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
