<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Importar la clase correcta
use Illuminate\Notifications\Notifiable;

class Estudiante extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $table = 'estudiantes'; // Corregido para coincidir con el nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
    ];

        //protected $hidden = [
       //     'password',
       // ];
}
