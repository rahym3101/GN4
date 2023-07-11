<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ]

    public function lesson(): BelongsTo
{
    return $this->belongsTo(Lesson::class)
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class)
    }
}
