<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rate;

class landingcontroller extends Controller
{
    //
    public function index(){
        $rates=rate::all();
        // foreach($rates as $rate){
        //     if($rate->b_type=='')
        // }
        // dd($rates);
        return view('landing',compact('rates'));
    }
    public function checklist()
    {
        return view('checklist');
    }
    public function apply()
    {
        return view('prospectiveborrowers.apply');
    }
}
