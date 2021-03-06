<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){
        return view('AmberLoan.borrower');
    }

    function approve(){
        return view('AmberLoan.approval');
    }
}
