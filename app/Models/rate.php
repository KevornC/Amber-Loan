<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'b_type',
        'business_rate',
        'editedBy'
    ];

    function borrowers(){
        return $this->hasMany(Borrower::class,'business_type');
    }
}
