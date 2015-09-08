<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('ContactoTableSeeder');
        $this->call('ContenidoTableSeeder');
        $this->call('CorreosTableSeeder');
        $this->call('FilosofiaTableSeeder');
        $this->call('MensajesTableSeeder');
        $this->call('RedesSocialesTableSeeder');
        $this->call('ListasTableSeeder');
        $this->call('CausasyProgramasTableSeeder');

        Model::reguard();
    }
}
