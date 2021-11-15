<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\rate;
use App\Models\Borrower;
use App\Models\LoanDocument;
use App\Models\User;
use App\Models\loan;
use App\Models\schedule;
use Livewire\WithFileUploads;

class Multiform extends Component
{
    use WithFileUploads;

    public $pphoto,$bType,$bname,$name,$tel,$email;
    public $trn,$nID,$poa,$loanAmt,$period;
    public $loanPDoc,$bPlan,$bSheet,$bStatement;
    public $bRCert,$bIEStatement,$bCFStatement;

    public $completed=false;

    protected $rules = [
        'pphoto'=>' required | mimes:jpg,jpeg,png',
        'bname'=>'required | string | min:5',
        'bType'=>'required',
        'name'=>'required | min:2 | string',
        'email'=>'required | email | min:3',
        'tel'=>'required',
        'trn'=>'required | mimes:jpg,jpeg,png',
        'poa'=>'required | mimes:pdf,png,jpg,jpeg',
        'nID'=>'required | mimes:png,jpg,jpeg',
        'loanAmt'=>'required | numeric  | min:100000',
        'period'=>'required | min:0 | max:5 | numeric',
        'loanPDoc'=>'required | mimes:pdf,docs,docx',
        'bPlan'=>'required |mimes:pdf,docs,docx',
        'bSheet'=>'required |mimes:pdf,docs,docx',
        'bStatement'=>'required |mimes:pdf,docs,docx',
        'bRCert'=>'required |mimes:pdf,docs,docx',
        'bIEStatement'=>'required |mimes:pdf,docs,docx',
        'bCFStatement'=>'required |mimes:pdf,docs,docx',
    ];

    protected $messages = [
        'pphoto.required'=>'Passport Size Photo is required.',
        'pphoto.mimes'=>'Only .jpg,.jpeg,.png formats are accpepted for Passport Size Photo.',
        'bname.required'=>'Your Business Name is required.',
        'bname.string'=>'Your Business Name must be a string.',
        'bname.min'=>'Your Business Name must be at least 5 characters.',
        'bType.required'=>'Your Business Type is required.',
        'tel.required'=>'Your Telephone is required.',
        'trn.required'=>'Your TRN is required.',
        'trn.mimes'=>'Only .jpg,.jpeg,.png formats are accpepted for TRN.',
        'poa.required'=>'Your Business Proof of Address is required.',
        'poa.mimes'=>'Only .pdf,.jpg,.jpeg,.png formats accpepted for Business Proof of Address.',
        'nID.required'=>'Your National ID is required.',
        'nID.mimes'=>'Only .jpg,.jpeg,.png formats are accpepted for National ID.',
        'loanAmt.required'=>'Your Loan Amount is required.',
        'loanAmt.numeric'=>'Loan Amount must be numbers.',
        'loanAmt.min'=>'Loan Amount must be at least $100,000',
        'period.required'=>'Your Loan Term is required.',
        'period.min'=>'Your Loan Term must be at least 1 year.',
        'period.max'=>'Your maximum Loan Term is 5 years.',
        'period.numeric'=>'Loan Term must be a number.',
        'loanPDoc.required'=>'Your Loan Purpose Document is required.',
        'loanPDoc.mimes'=>'Only .pdf,.docx,.docs formats are accpepted for Loan Purpose Document.',
        'bPlan.required'=>'Your Business Plan is required.',
        'bPlan.mimes'=>'Only .pdf,.docx,.docs formats are accpepted for Business Plan.',
        'bSheet.required'=>'Your Business Sheet is required.',
        'bSheet.mimes'=>'Only .pdf,.docx,.docs formats are accpepted for Business Sheet.',
        'bStatement.required'=>'Your Business Bank Book Statement is required.',
        'bStatement.mimes'=>'Only .pdf,.docx,.docs formats are accpepted for Business Bank Book Statement.',
        'bRCert.required'=>'Your Business Registration Certificate is required.',
        'bRCert.mimes'=>'Only .pdf,.docx,.docs formats are accpepted for Business Registration Certificate.',
        'bIEStatement.required'=>'Your Business Income and Expenditure Statement is required.',
        'bIEStatement.mimes'=>'Only .pdf,.docx,.docs formats are accpepted for Business Income and Expenditure Statement.',
        'bCFStatement.required'=>'Your Business Cash Flow Statement and Projections are required.',
        'bCFStatement.mimes'=>'Only .pdf,.docx,.docs formats are accpepted for Business Cash Flow Statement and Projections.',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    function home(){
        $this->completed=false;
    }
    function clear(){
        $this->pphoto='';
        $this->bname='';
        $this->bType='';
        $this->name='';
        $this->email='';
        $this->tel='';
        $this->trn='';
        $this->poa='';
        $this->nID='';
        $this->loanAmt='';
        $this->period='';
        $this->loanPDoc='';
        $this->bPlan='';
        $this->bSheet='';
        $this->bStatement='';
        $this->bRCert='';
        $this->bIEStatement='';
        $this->bCFStatement='';
    }

    function loanapplicationsubmission(){
        $application=$this->validate();
        $trn=$this->name." ".$this->trn->getClientOriginalName();
        $pphoto=$this->name." ".$this->pphoto->getClientOriginalName();
        $poa=$this->bname." ".$this->poa->getClientOriginalName();
        $nID=$this->name." ".$this->nID->getClientOriginalName();
        $loanPDoc=$this->bname." ".$this->loanPDoc->getClientOriginalName();
        $bPlan=$this->bname." ".$this->bPlan->getClientOriginalName();
        $bSheet=$this->bname." ".$this->bSheet->getClientOriginalName();
        $bStatement=$this->bname." ".$this->bStatement->getClientOriginalName();
        $bRCert=$this->bname." ".$this->bSheet->getClientOriginalName();
        $bIEStatement=$this->bname." ".$this->bIEStatement->getClientOriginalName();
        $bCFStatement=$this->bname." ".$this->bCFStatement->getClientOriginalName();
        
        $this->trn->storePubliclyAs('AmberLoan',$trn, 'BuinessLoanDocuments');
        $this->pphoto->storePubliclyAs('AmberLoan',$pphoto, 'BuinessLoanDocuments');
        $this->poa->storePubliclyAs('AmberLoan',$poa, 'BuinessLoanDocuments');
        $this->nID->storePubliclyAs('AmberLoan',$nID, 'BuinessLoanDocuments');
        $this->loanPDoc->storePubliclyAs('AmberLoan',$loanPDoc, 'BuinessLoanDocuments');
        $this->bPlan->storePubliclyAs('AmberLoan',$bPlan, 'BuinessLoanDocuments');
        $this->bSheet->storePubliclyAs('AmberLoan',$bSheet, 'BuinessLoanDocuments');
        $this->bStatement->storePubliclyAs('AmberLoan',$bStatement, 'BuinessLoanDocuments');
        $this->bRCert->storePubliclyAs('AmberLoan',$bRCert, 'BuinessLoanDocuments');
        $this->bIEStatement->storePubliclyAs('AmberLoan',$bIEStatement, 'BuinessLoanDocuments');
        $this->bCFStatement->storePubliclyAs('AmberLoan',$bCFStatement, 'BuinessLoanDocuments');
        
        $borrower_id=Borrower::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'telephone'=>$this->tel,
            'trn'=>$trn,
            'national_id'=>$nID,
            'passport_photo'=>$pphoto,
            'address'=>$poa,
            'business_name'=>$this->bname,
            'business_type'=>$this->bType,
            'loan_amount'=>$this->loanAmt,
            'repayment_period'=>$this->period,
        ])->id;

        LoanDocument::create([
            'borrower_id'=>$borrower_id,
            'loanP_Document'=>$loanPDoc,
            'business_plan'=>$bPlan,
            'balance_sheet'=>$bSheet,
            'bank_book'=>$bStatement,
            'business_Rcert'=>$bRCert,
            'business_IEStatement'=>$bIEStatement,
            'business_CF_statement_projections'=>$bCFStatement,
        ]);
        
        schedule::create([
            'borrower_id'=>$borrower_id
        ]);

        loan::create([
            'borrower_id'=>$borrower_id
        ]);

        $this->completed=true;
        $this->clear();
    }

    public function render()
    {
        $rates=rate::all();
        return view('livewire.multiform',compact('rates'));
    }
}
