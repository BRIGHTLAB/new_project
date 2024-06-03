<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollements extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'students_id',
        'classes_id',
        'semester',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
