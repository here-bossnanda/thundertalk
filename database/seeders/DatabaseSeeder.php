<?php

namespace Database\Seeders;

use App\Models\Thundertalk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ThundertalkSeeder::class);
        Thundertalk::factory(10)->create();
    }
}
