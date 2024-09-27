<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semesters';

    protected $fillable = [
        'semester_name'
    ];

    public function subjects() {
        return $this->hasMany(Subject::class);
    }

    public function enrollmentRecords()
    {
        return $this->hasMany(EnrollmentRecord::class);
    }
}
