<?php

namespace Database\Seeders;

use App\Models\My;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        My::factory()->count(500)->create();
    }
}
