<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'total_price',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function CartItem(){
        return $this->hasMany(CartItem::class, 'cart_id', 'id');
    }
}
