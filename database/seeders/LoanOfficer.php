<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class LoanOfficer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $officers = [
            [
                'name'=>'Solomon Jones',
                'email'=>'officersolomon@amberloan.com',
                'password'=>Hash::make('amberloan')
            ]
        ];
        foreach ($officers as $key => $value) {
            # code...
            User::create($value);
        }
    }
}
