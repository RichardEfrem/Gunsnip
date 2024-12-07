<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grade';

    protected $fillable = [
        'grade_name'
    ];

    public function Gunpla()
    {
        return $this->hasMany(Gunpla::class, 'grade_id', 'id');
    }
}
