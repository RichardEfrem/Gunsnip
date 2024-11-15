<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunpla extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'ratings',
        'release_date',
        'pBandai',
        'totalStock',
        'series_id',
        'grade_id'
    ];

    public function Orderhistoryitem()
    {
        return $this->hasMany(Orderhistoryitem::class, 'gunpla_id', 'id');
    }

    public function Cartitems()
    {
        return $this->hasMany(Cartitems::class, 'gunpla_id', 'id');
    }

    public function Review()
    {
        return $this->hasMany(Review::class, 'gunpla_id', 'id');
    }

    public function Series()
    {
        return $this->belongsTo(Series::class, 'series_id', 'id');
    }

    public function Grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }
}
