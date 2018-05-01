<?php

use App\User;
use App\Dog;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run() {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'M',
            'email'    => 'm@gmail.com',
            'password' => Hash::make('123456'),
            'address'     => '5/6 Sydney road',
            'mobile_number'    => '0411234522',
            'work_number' => '012222222',
            'home_number' => '012262'
        ));

        User::create(array(
            'name'     => 'Jane',
            'email'    => 'j@gmail.com',
            'password' => Hash::make('123456'),
            'address'     => '5/7 Union St',
            'mobile_number'    => '0411234522'
        ));

        Dog::create(array(
            'breed'     => 'Pom',
            'name'    => 'ciko',
            'user_id' => '1',
            'date_of_birth' => '2018-05-01'
        ));

        Dog::create(array(
            'breed'     => 'Shiba Inu',
            'name'    => 'blacky',
            'user_id' => '1',
            'date_of_birth' => '2017-05-01'
        ));
    }
}