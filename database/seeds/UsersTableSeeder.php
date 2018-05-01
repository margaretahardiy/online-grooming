<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run() {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'M',
            'email'    => 'm@gmail.com',
            'password' => Hash::make('123456'),
        ));

        User::create(array(
            'name'     => 'TB',
            'email'    => 'tb@gmail.com',
            'password' => Hash::make('123456'),
        ));
    }
}