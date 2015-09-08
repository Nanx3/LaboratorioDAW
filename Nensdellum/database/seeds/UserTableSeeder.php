<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(NensdeLlum\User::class)->create([
            'name'=>'Saul',
            'email' => 'saulzini@gmail.com',
            'password'=> Hash::make('admin')
        ]);

        factory(NensdeLlum\User::class,5)->create();


    }
}
