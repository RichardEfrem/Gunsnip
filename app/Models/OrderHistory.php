<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;

    protected $table = 'orderhistory';

    protected $fillable = [
        'user_id',
        'order_date',
        'status',
        'total_price',
        'created_at',
        'updated_at'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function OrderHistoryItem()
    {
        return $this->hasMany(OrderHistoryItem::class);
    }
}
