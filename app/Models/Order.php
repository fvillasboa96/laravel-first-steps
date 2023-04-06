<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use App\Models\User;
use App\Models\Productos;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'customer_id',
    ];

    public function payment(){
        return $this->hasOne(Payment::class);
    }

//Many to one
    public function user(){
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function productos(){
        return $this->morphTo(Productos::class, 'productable')->withPivot('cantidad');
    }
}
