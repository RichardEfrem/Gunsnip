<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'text_review',
        'rating',
        'user_id',
        'gunpla_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Gunpla()
    {
        return $this->belongsTo(Gunpla::class, 'gunpla_id', 'id');
    }
}
