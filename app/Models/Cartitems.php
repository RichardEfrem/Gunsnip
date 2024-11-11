<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartitems extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'gunpla_id',
        'quantity',
        'sub_total'
    ];

    public function Gunpla()
    {
        return $this->belongsTo(Gunpla::class, 'gunpla_id', 'id');
    }

    public function Cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }
}
