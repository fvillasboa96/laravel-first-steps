<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;

class Cart extends Model
{
    use HasFactory;

    public function productos(){
        return $this->morphTo(Productos::class, 'productable')->withPivot('cantidad');
    }
}
