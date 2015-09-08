<?php

use Illuminate\Database\Seeder;

class ContactoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(NensdeLlum\Contacto::class,1)->create();

    }
}
