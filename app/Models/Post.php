<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'content', 'image', 'posted', 'category_id'];

    // SE CREAN LAS RELACIONES MEDIANTE FUNCIONES
    public function category() {

        //ESTE TIPO DE RELACION ES PARA UN MODELO INVERSO 
        return $this->belongsTo(Category::class); 

    }
     
}
