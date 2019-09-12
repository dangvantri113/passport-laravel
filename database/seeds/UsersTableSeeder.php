<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
                'created_at'=>now(),
                'updated_at'=>now(),
                'role_id' => 1
            ],
            [
                'name' => 'shop',
                'email' => 'shop@gmail.com',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
                'created_at'=>now(),
                'updated_at'=>now(),
                'role_id' => 2
            ],
            [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
                'created_at'=>now(),
                'updated_at'=>now(),
                'role_id' => 3
            ],

        ];
        for ($i=0;$i<100;$i++){
            $users[]=[
                'name' => $fake->userName,
                'email' => $fake->email,
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
                'created_at'=>now(),
                'updated_at'=>now(),
                'role_id' => rand(2,3)
            ];
        }
        DB::table('users')->insert($users);
    }
}
