<?php

use Illuminate\Database\Seeder;

class CorreosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(NensdeLlum\Correo::class,50)->create();
    }
}
