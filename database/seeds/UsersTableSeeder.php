<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::truncate();
        $data = [
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'password' => bcrypt('password')
        ];
        \DB::table('users')->insert($data);
    }
}
