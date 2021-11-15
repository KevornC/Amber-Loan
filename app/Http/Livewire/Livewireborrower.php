<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\rate;
use App\Models\Borrower;
use App\Models\LoanDocument;
use App\Models\User;
use App\Models\loan;
use App\Models\Schedule;
use Auth;

use Carbon\Carbon;

use Mail;
use App\Mail\LoanApprovalEmail;

class Livewireborrower extends Component
{
    public function render()
    {
        $borrowers=LoanDocument::with('borrower')->get();
        return view('livewire.livewireborrower',compact('borrowers'));
    }
}
