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
use Mail;
use App\Mail\LoanAppointmentEmail;

class Livewirerschedule extends Component
{
    public $idate,$itime;
    public $successMsg,$addid,$addmode=false;

    protected $rules = [
        'idate'=>'required',
        'itime'=>'required'
    ];

    protected $messages = [
        'idate.required'=>'The Interview Date is required.',
        'itime.required'=>'The Interview Time is required.',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    function add($id){
        $this->addmode=true;
        $obj=schedule::find($id);
        $this->addid=$id;
    }
    function schedule(){
        $edit=$this->validate();
        $obj=schedule::find($this->addid)->update([
            'interview_date'=>$this->idate,
            'interview_time'=>$this->itime,
            'scheduledBy'=>Auth::user()->name,
            'status'=>'Scheduled'
        ]);

        $business=schedule::with('borrower')->find($this->addid);
// dd($business);
        $EC=[
            'name'=>$business->borrower->name,
            'business_name'=>$business->borrower->business_name,
            'interview_date'=>$business->interview_date,
            'interview_time'=>$business->interview_time,
        ];

        mail::to($business->borrower->email)->send(new LoanAppointmentEmail($EC));

        $this->successMsg='Amber Loan Schedule Added Successfully';
        $this->idate='';
        $this->itime='';
        $this->addmode=false;
    }
    public function render()
    {
        $schedules=schedule::with('borrower','borrower.rate')->get();
        return view('livewire.livewirerschedule',compact('schedules'));
    }
}
