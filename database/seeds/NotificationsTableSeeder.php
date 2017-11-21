<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->truncate();
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            DB::table('notifications')->insert([
                'from' => $faker->name,
                'message' => $faker->paragraph,
            ]);
        }
    }
}