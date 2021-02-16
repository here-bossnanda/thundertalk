<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ThundertalkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ketika Seeder dijalan maka hapus dulu data yang ada di table
        //untuk menghindari duplikasi data
        DB::table('thundertalk')->delete();
        //jalankan seeder
        DB::table('thundertalk')->insert([
          ['title' => 'hello thundertalk','created_at' => now(),'updated_at' => now()],
          ['title' => 'hola thundertalk','created_at' => now(),'updated_at' => now()],
          ['title' => 'priviet thundertalk','created_at' => now(),'updated_at' => now()]
        ]);
    }
}
