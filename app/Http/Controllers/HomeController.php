<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrower;
use App\Models\loan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countb=Borrower::count();
        $totalcredited=Borrower::all();
        $totaldebited=loan::all();
        $totalc=0;
        $totald=0;
        foreach ($totalcredited as $key) {
            # code...
            $totalc+=$key->loan_amount;
        }
        foreach ($totaldebited as $key) {
            # code...
            $totald+=$key->total_repayment_amount;
        }

        return view('home',compact('countb','totalc','totald'));
    }
}
