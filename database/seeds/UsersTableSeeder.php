<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Faker::create();

        for ($i = 0; $i <= 50; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $i . '@fsg.com',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}