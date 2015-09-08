<?php

use Illuminate\Database\Seeder;

class ListasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * $table->string('Titulo',255);
    $table->mediumText('Descripcion');
    $table->enum('Tipo',['Valor','Colaborador','Causas','Programas']);

     */
    public function run()
    {
        //
        factory(NensdeLlum\Listas::class,50)->create();
    }
}
