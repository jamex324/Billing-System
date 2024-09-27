<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Semester;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'unit',
        'course_id',
        'semester_id',
        'year_id',
    
        
    ];

    protected $table = 'subjects';

    public function transaction(){
        return $this->belongsTo(Course::class);
    }

    public function yearLevel(){
        return $this->belongsTo(YearLevel::class);
    }

    public function semesters(){
        return $this->belongsTo(Semester::class);
    }

    public function enrolled_subject(){
        return $this->belongsTo(EnrolledSubjects::class);
    }
}
