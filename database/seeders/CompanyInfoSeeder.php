<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'PT. PATA Dealer',
            'address' => 'Jl. BKR 24',
            'phone' => '+628123123123',
            'email' => 'contact@pata-dealer.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
