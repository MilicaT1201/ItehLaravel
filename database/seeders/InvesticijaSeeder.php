<?php

namespace Database\Seeders;

use App\Models\Investicija;
use Illuminate\Database\Seeder;

class InvesticijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Investicija::factory()->count(60)->create();
    }
}
