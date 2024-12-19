<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = [
        'gunpla_id',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Gunpla(){
        return $this->belongsTo(Gunpla::class, 'gunpla_id', 'id');
    }
}
