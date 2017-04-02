<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategoriaTableSeeder');
    }
}

class CategoriaTableSeeder extends Seeder{
 	public function run(){
        Categoria::create(['nome' => 'Eletrodomestico']);
        Categoria::create(['nome' => 'Eletronica']);
        Categoria::create(['nome' => 'Computador de Mesa']);
    }

}
