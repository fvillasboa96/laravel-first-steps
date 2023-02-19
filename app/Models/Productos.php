<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * Atributos que se pueden asignar en forma masiva
     * Son los atributos de la tabla
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status,'
    ];
}
