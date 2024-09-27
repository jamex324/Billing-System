<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'course_name',
    ];

    protected $table = 'courses';

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function yearLevels()
    {
        return $this->hasMany(YearLevel::class);
    }

    public function enrollmentRecords()
    {
        return $this->hasMany(EnrollmentRecord::class);
    }
}
