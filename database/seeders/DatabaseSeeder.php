<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\InvesticijaSeeder;
use Database\Seeders\InvestitorSeeder;
use Database\Seeders\ProjekatSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ProjekatSeeder = new ProjekatSeeder;
        $ProjekatSeeder->run();

        $InvestitorSeeder = new InvestitorSeeder;
        $InvestitorSeeder->run();

        $InvesticijaSeeder = new InvesticijaSeeder;
        $InvesticijaSeeder->run();
    }
}
