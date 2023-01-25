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
      
        DB::table('users')->insert([
            [
              'name' => 'I Am Admin',
              'email' => 'admin@email.com',
              'password' => bcrypt('qaz123456'),
              'code_user' => 'UD123456',
              'avatar' => '1483537975.png',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'phone' => '0912345678',
              'is_admin' => 1
            ],
            [
              'name' => 'administrator',
              'email' => 'administrator@email.com',
              'password' => bcrypt('qaz123456'),
              'code_user' => 'UD123456',
              'avatar' => '1483537975.png',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'phone' => '0812345678',
              'is_admin' => 1
            ]
        ]);
    }
}
