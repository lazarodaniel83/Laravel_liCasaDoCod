<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->with('produtos',$produtos);
    }

    public function mostra($id)
    {
        $id= Request::route('id');
        $resposta = DB::select('select * from produtos where id=?',[$id]);

        if(empty($resposta))
        {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p',$resposta[0]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona()
    {
       $nome = Request::input('nome') ;
       $descricao = Request::input('descricao');
       $valor = Request::input('valor');
       $quantidade = Request::input('quantidade');

       Db::table('produtos')->insert(['nome'=>$nome,
            'valor'=>$valor,
            'descricao'=>$descricao,
            'quantidade'=>$quantidade]
    ); 

       return view('produto.adicionado')->withNome($nome);
       
    }
}

