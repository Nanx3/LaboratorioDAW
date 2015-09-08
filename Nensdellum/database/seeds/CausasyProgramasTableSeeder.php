<?php

use Illuminate\Database\Seeder;

class CausasyProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(NensdeLlum\CausasyProgramas::class,15)->create();
    }
}
