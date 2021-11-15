<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\rate;
use App\Models\Borrower;
use App\Models\LoanDocument;
use App\Models\User;
use APp\Models\loan;
use APp\Models\Schedule;

class Livewireapply extends Component
{
    public function render()
    {
        return view('livewire.livewireapply');
    }
}
