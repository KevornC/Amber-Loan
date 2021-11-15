<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\rate;

class rateseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rates = [
            [
                'b_type'=>'Micro Business',
                'business_rate'=>0.0567
            ],
            [
                'b_type'=>'Small Business',
                'business_rate'=>0.0895
            ],
            [
                'b_type'=>'Company',
                'business_rate'=>0.155
            ]
        ];

        foreach ($rates as $key => $value) {
            # code...
            rate::create($value);
        }
    }
}
