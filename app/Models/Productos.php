<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

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

    public function carts(){
        return $this->morphByMany(Cart::class, 'productable')->withPivot('cantidad');
    }

    public function orders(){
        return $this->morphByMany(Order::class, 'productable')->withPivot('cantidad');
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

    public function scopeAvailable($query){
        $query->where('status', 'available');
    }
}
