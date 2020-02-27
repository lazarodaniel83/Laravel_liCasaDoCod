<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
         $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder
{
    public function run()
    {   
       Db::insert('insert into produtos(nome,quantidade,valor,descricao) values(?,?,?,?)',array('Geladeira',2,5900.00,'Side by side com gelo na porta')); 
       Db::insert('insert into produtos(nome,quantidade,valor,descricao) values(?,?,?,?)',array('Fogao',5,950.00,'Painel automatico e ferro eletrico'));
       Db::insert('insert into produtos(nome,quantidade,valor,descricao) values(?,?,?,?)',array('Microondas',1,1520.00,'Manda SMS quando termina de esquentar'));

    }
}    