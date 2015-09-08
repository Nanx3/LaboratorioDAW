<?php

use Illuminate\Database\Seeder;

class RedesSocialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(NensdeLlum\RedesSociales::class,20)->create();
    }
}
