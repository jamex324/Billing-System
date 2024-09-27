<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'course_id',
        'year_id',
        'semester_id',
        'status',
        // 'total_units',
    ];

    protected $table = 'enrollment_records';

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function enrolledSubjects()
    {
        return $this->hasMany(EnrolledSubjects::class, 'enrollment_record_id'); // Adjust based on your foreign key
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }

    public function yearLevel()
    {
        return $this->belongsTo(YearLevel::class, 'year_id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class,'semester_id');
    }

    
}
