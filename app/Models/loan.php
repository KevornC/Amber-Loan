<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;

    protected $fillable = [
    'borrower_id',
    'loan_period',
    'repayment_amount',
    'total_repayment_amount'
    ];

    public function borrower(){
        return $this->belongsTo(Borrower::class,'borrower_id');
    }
}
