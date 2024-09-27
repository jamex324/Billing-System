<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_name',
    ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function enrollmentRecords(){
        return $this->hasMany(EnrollmentRecord::class);
    }
}
