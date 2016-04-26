<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'admin@gmail.com',
            'password' => '123456',
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'student@gmail.com',
            'password' => '123456',
            'role_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'teacher@gmail.com',
            'password' => '123456',
            'role_id' => 3
        ]);
    }
}
