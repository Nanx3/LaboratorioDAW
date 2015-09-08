<?php

use Illuminate\Database\Seeder;

class MensajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(NensdeLlum\Mensajes::class,15)->create();
    }
}
