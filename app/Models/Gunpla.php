<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunpla extends Model
{
    use HasFactory;

    protected $table = 'gunpla';

    protected $fillable = [
        'name',
        'description',
        'price',
        'ratings',
        'release_date',
        'totalStock',
        'totalPrice',
        'series_id',
        'grade_id'
    ];

    // public function Orderhistoryitem()
    // {
    //     return $this->hasMany(Orderhistoryitem::class, 'gunpla_id', 'id');
    // }

    public function CartItem()
    {
        return $this->hasMany(CartItem::class, 'gunpla_id', 'id');
    }

    // public function Review()
    // {
    //     return $this->hasMany(Review::class, 'gunpla_id', 'id');
    // }

    public function Favorites()
    {
        return $this->hasMany(Favorites::class, 'gunpla_id', 'id');
    }

    public function Series()
    {
        return $this->belongsTo(Series::class, 'series_id', 'id');
    }

    public function Grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }

    public function GunplaImage()
    {
        return $this->hasMany(GunplaImage::class, 'gunpla_id', 'id');
    }
}
