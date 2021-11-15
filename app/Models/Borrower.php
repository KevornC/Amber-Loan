<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'trn',
        'national_id',
        'passport_photo',
        'address',
        'business_name',
        'business_type',
        'loan_amount',
        'repayment_period',
        'LoanOfficer',
        'status',
        'ApprovedByDate'
    ];

    public function loans(){
        return $this->hasMany(loan::class,'borrower_id');
    }

    public function rate(){
        return $this->belongsTo(rate::class,'business_type');
    }
    public function LoanDocuments(){
        return $this->hasMany(LoanDocument::class,'borrower_id');
    }
}
