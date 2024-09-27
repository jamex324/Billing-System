<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_id',
        'last_name',
        'first_name',
        'address',
        'phone',
        'email',
    ];

    protected $table = 'students';

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function enrollmentRecords()
    {
        return $this->hasMany(EnrollmentRecord::class);
    }
}
