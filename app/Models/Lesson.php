<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function season(): BelondsTo
    {
        return $this->belengsTo(Season::class);
    }

    public function course(): BelondsTo
    {
        return $this->belengsTo(Course::class);
    }

    public function classroom(): BelondsTo
    {
        return $this->belengsTo(Classroom::class);
    }

    public function teacher(): BelondsTo
    {
        return $this->belengsTo(Teacher::class);
    }

    public function registration(): HasMany
    {
        return $this->haasMany(Registration::class);
    }
}
