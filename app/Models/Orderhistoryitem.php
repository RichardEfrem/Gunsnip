<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderhistoryitem extends Model
{
    use HasFactory;

    protected $fillable = [
        'history_id',
        'gunpla_id',
        'quantity',
        'sub_amount',
        'status',
    ];

    public function Orderhistoryitem()
    {
        return $this->belongsTo(Orderhistory::class, 'history_id', 'id');
    }

    public function Gunpla()
    {
        return $this->belongsTo(Gunpla::class, 'gunpla_id', 'id');
    }
}
