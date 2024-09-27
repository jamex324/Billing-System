<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolledSubjects extends Model
{
    use HasFactory;

    protected $table = 'enrolled_subjects';

    protected $fillable = [
        'enrollment_record_id',
        'subject_id',
    ];

    public function enrollmentRecord()
    {
        return $this->belongsTo(EnrollmentRecords::class);
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
