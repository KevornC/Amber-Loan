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

class Livewirerate extends Component
{   
    public $btype,$brate,$editedBy;
    public $successMsg,$editid,$editmode=false;

    protected $rules = [
        'brate'=>'required | numeric |min:4'
    ];

    protected $messages = [
        'brate.required'=>'The Business Rate is required.',
        'brate.min'=>'The Business Rate must be at least 5%.'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    function edit($id){
        $this->editmode=true;
        $obj=rate::find($id);
        $this->editid=$id;
        $this->btype=$obj->b_type;
        $this->brate=$obj->business_rate * 100;
    }
    function update(){
        $edit=$this->validate();
        $obj=rate::find($this->editid)->update([
            'business_rate'=>floatval($this->brate/100),
            'editedBy'=>Auth::user()->name,
        ]);
        $this->successMsg='Amber Loan Rate Edited Successfully';
        $this->editmode=false;
    }

    public function render()
    {
        $rates=rate::all();
        return view('livewire.livewirerate',compact('rates'));
    }
}
