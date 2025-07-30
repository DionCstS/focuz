<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_completed',
        'points_awarded'
    ];

    protected $casts = [
        'is_completed' => 'boolean',
        'points_awarded' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
