<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $limit = 30;
        $i = 1;

        $data = [];

        while($i <= $limit){
            $draw = rand(1, 3);

            $tmp = [];
            $tmp['draw_id'] = $draw;
            $tmp['user_id'] = $i;
            $tmp['created_at'] = Carbon::now();

            array_push($data, $tmp);

            $i++;
        }


        DB::table('tickets')->insert($data);
    }
}
