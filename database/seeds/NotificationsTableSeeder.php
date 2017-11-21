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

        for ($i = 0; $i <= 3; $i++) {
            DB::table('notifications')->insert([
                'from' => $faker->name,
                'message' => $faker->words(10, true),
            ]);
        }
    }
}