<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
    ];

    public function scores()
    {
        return $this->hasMany(Scores::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'Enrollments')->withPivot('semester')->withTimestamps();
    }
}
