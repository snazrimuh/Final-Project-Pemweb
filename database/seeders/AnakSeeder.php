<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anak;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Anak::factory()->count(10)->create();
    }
}
