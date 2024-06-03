<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'class_name',
        'description',
        'class_number',
    ];

    public function scores()
    {
        return $this->hasMany(Scores::class);
    }

    public function students()
    {
        return $this->belongsToMany(Students::class, 'Enrollments')->withPivot('semester')->withTimestamps();
    }
}
