<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function lessons(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
