<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanoFinanceiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PlanoFinanceiro::factory(5)->create();
    }
}
