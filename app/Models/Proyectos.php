<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\factories\HasFactory;



class Proyectos extends Model
{
     use HasFactory;
    protected $fillable=["Tema","descripcion","area","estado","observacion","usuarioExt"];
}

Route::resource('project', ProyectosController::class);