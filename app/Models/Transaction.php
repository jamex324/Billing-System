<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'billing_id',
    ];

    protected $table = 'transactions';

    public function transaction(){
        return $this->belongsTo(Billing::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

}

