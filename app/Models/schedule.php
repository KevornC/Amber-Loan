<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'borrower_id',
        'interview_date',
        'interview_time',
        'scheduledBy',
        'status'
    ];

    public function borrower(){
        return $this->belongsTo(Borrower::class,'borrower_id');
    }
}
