<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cartitem';

    protected $fillable = [
        'cart_id',
        'gunpla_id',
        'sub_total',
        'amount'
    ];

    public function Gunpla(){
        return $this->belongsTo(Gunpla::class, 'gunpla_id', 'id');
    }

    public function Cart(){
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }
}
