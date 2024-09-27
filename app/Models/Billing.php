<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
    ];

    protected $table = 'billings';

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    
}
