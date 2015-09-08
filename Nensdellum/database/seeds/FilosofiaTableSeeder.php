<?php

use Illuminate\Database\Seeder;

class FilosofiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(NensdeLlum\Filosofia::class,10)->create();
    }
}
