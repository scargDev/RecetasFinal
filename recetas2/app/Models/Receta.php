<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    //Campos de la aplicación que son seguros, se indic que campos son de la aplicación
    protected $fillable = [
        'nombre',
        'ingredientes',
        'preparacion',
        'imagen',
        'categoria_id',
    ];

    //Relación que permite obtener la información de la categoria mediante la clave foránea (Id) 
    public function categoriaReceta(){
        //Relación inversa
        return $this->belongsTo(Categoria::class, 'categoria_id');
    
    }

    //para hacer realación y mostrar el nombre del usuario mediante el id de usuario que creo la receta
    public function autorReceta(){
        //Relación inversa
        return $this->belongsTo(User::class, 'user_id');
    
    }
}





