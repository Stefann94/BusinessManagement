<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    public function run(): void
    {
        Business::insert([
            [
                'startdate' => '2025-01-01',
                'name'      => 'My First Business',
                'domain'    => 'tech',
                'status'    => 'active',
                'user_id'   => 1,
            ],
            [
                'startdate' => '2025-02-15',
                'name'      => 'My Second Business',
                'domain'    => 'food',
                'status'    => 'active',
                'user_id'   => 1,
            ]
        ]);
    }
}