<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'borrower_id',
        'loanP_Document',
        'business_plan',
        'balance_sheet',
        'bank_book',
        'business_Rcert',
        'business_IEStatement',
        'business_CF_statement_projections',
    ];

    public function borrower(){
        return $this->belongsTo(Borrower::class,'borrower_id');
    }
}
