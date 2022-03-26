<?php

namespace Database\Seeders;

use App\Models\Projekat;
use Illuminate\Database\Seeder;

class ProjekatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projekat::factory()->count(40)->create();
    }
}
