<?php

use Illuminate\Database\Seeder;
use App\Categorias;
class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
         $this->call('CategoriasTableSeeder');
    }
}
class CategoriasTableSeeder extends Seeder {
    public function run()
    {
        Categorias::create(['nome' => 'ELETRODOMESTICO']);
        Categorias::create(['nome' => 'ELETRONICA']);
        Categorias::create(['nome' => 'BRINQUEDO']);
        Categorias::create(['nome' => 'ESPORTES']);
    }
}