<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        $limit = 50;
        $i = 0;

        while($i < $limit){
            $tmp = [];
            $tmp['name'] = $faker->name;
            $tmp['email'] = $faker->safeEmail;
            $tmp['email_verified_at'] = Carbon::now();
            array_push($data, $tmp);
            $i++;
        }

        DB::table('users')->insert($data);
    }
}
