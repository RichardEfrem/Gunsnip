<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $table = 'series';

    protected $fillable = [
        'name',
        'series_description'
    ];

    public function Gunpla()
    {
        return $this->hasMany(Gunpla::class, 'series_id', 'id');
    }
}
