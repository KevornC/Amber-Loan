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

class LivewireApproval extends Component
{
    public $viewmode=false,$successMsg,$loan;

    function approve($id){
        $obj=LoanDocument::find($id);
        Borrower::with('rate')->find($obj->borrower_id)->update([
            'LoanOfficer'=>Auth::user()->name,
            'ApprovedByDate'=>now('Jamaica')->format('Y-m-d'),
            'status'=>'Approved'
        ]);
        $borrower_id=Borrower::with('rate')->find($obj->borrower_id);
        // dd($borrower_id);
        $p=$borrower_id->loan_amount; 
        $r=$borrower_id->rate->business_rate;
        $t=$borrower_id->repayment_period;
        $MonthlyPayment;
 
    // one month interest
    $r = $r / (12);
     
    // one month period
    $t = $t * 12;
     
    $MonthlyPayment = ($p * $r * pow(1 + $r, $t)) /
                  (pow(1 + $r, $t) - 1);

        $MonthlyPayment=round($MonthlyPayment,2);
        $TotalRepayment=$MonthlyPayment*$t;
        // echo $TotalRepayment;
        $Total_interest=$TotalRepayment-$p;
        $loan=loan::where('borrower_id',$borrower_id->id)->update([
            'loan_period'=>$borrower_id->repayment_period,
            'repayment_amount'=>$MonthlyPayment,
            'total_repayment_amount'=>$TotalRepayment
        ]);

        $details=[
            'P'=>$p,
            'MP'=>$MonthlyPayment,
            'INT'=>$borrower_id->rate->business_rate*100,
            'time'=>$borrower_id->repayment_period
        ];
        sleep(1);

        mail::to($borrower_id->email)->send(new LoanApprovalEmail($details));
        $this->successMsg='Loan Approve Success';
    }

    function return(){
        $this->viewmode=false;
    }

    function view($id){
        $obj=LoanDocument::find($id);
        $borrower_id=Borrower::find($obj->borrower_id);
        // dd($borrower_id->id);
        $this->loan=loan::with('borrower','borrower.rate')->where('borrower_id',$borrower_id->id)->get();
        // dd($this->loan);
        $this->viewmode=true;
    }

    public function render()
    {
        $borrowers=Borrower::with('rate')->get();
        return view('livewire.livewire-approval',compact('borrowers'));
    }
}
