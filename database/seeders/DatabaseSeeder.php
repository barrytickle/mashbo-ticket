<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Database\Seeders\DrawTableSeeder;
use Database\Seeders\TicketTableSeeder;
use Database\Seeders\UserTableSeeder;
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
        $this->call([
            UserTableSeeder::class,
            DrawTableSeeder::class,
            TicketTableSeeder::class
        ]);

    }
}
