<?php


use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('users')->insert(array (
            'first_name'  => 'Nancy',
            'last_name'   => 'Espinosa',
            'email'       => 'nancyespinosax3@gmail.com',
            'password'    => \Hash::make('secret'),
            'type'        => 'admin',
            'full_name'   => 'Nancy Espinosa'
        ));

        \DB::table('user_profiles')->insert(array (
            'user_id' => 1,
            'birthdate' => '1983/09/23'
        ));
    }

}