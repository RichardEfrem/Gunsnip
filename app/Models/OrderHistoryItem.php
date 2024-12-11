<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistoryItem extends Model
{
    use HasFactory;

    protected $table = 'orderhistoryitem';

    protected $fillable = [
        'orderhistory_id',
        'gunpla_id',
        'total_items',
        'sub_total',
        'created_at',
        'updated_at'
    ];

    public function OrderHistory()
    {
        return $this->belongsTo(OrderHistory::class, 'orderhistory_id', 'id');
    }

    public function Gunpla()
    {
        return $this->belongsTo(Gunpla::class, 'gunpla_id', 'id');
    }
}
