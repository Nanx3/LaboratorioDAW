<?php

use Illuminate\Database\Seeder;

class ContenidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(NensdeLlum\Contenido::class,70)->create();

    }
}
