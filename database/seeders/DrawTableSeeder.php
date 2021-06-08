<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('draws')->insert([
            ['title' => 'Draw One', 'target' => 20, 'created_at' => Carbon::now()],
            ['title' => 'Draw Two', 'target' => 50, 'created_at' => Carbon::now()],
            ['title' => 'Draw Three', 'target' => 50, 'created_at' => Carbon::now()]
        ]);
    }
}
