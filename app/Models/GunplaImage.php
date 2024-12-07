<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GunplaImage extends Model
{

    protected $table = 'gunpla_image';
    
    protected $fillable = [
        'image_path',
        'gunpla_id',
    ];
    use HasFactory;

    public function Gunpla()
    {
        return $this->belongsTo(Gunpla::class, 'gunpla_id', 'id');
    }
}
