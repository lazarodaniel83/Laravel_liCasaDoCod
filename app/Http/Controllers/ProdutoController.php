<?php

namespace App\Http\Controllers;

use Request;
use App\Produto;
use Illuminate\Support\Facades\DB;
//use estoque1\Produto;
use estoque1\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos',$produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        if(empty($produto))
        {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p',$produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona()
    {
        $params = Request::all();
        Produto::create($params);
        
       return redirect()
       ->action('ProdutoController@lista')
       ->withInput(Request::only('nome'));
       
    }
    public function listaJson()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }
    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista'); 
    }
    public function altera($id)
    {
        $produto = Produto::find($id);
       
        
       return view('produto.altera')->with('p',$produto);
    }
    public function alterado($id)
    {
        $params = Produto::all();
        $produto= Produto::findOrFail($id);
        $produto->fill($params)->save();
        
        return redirect()->action('ProdutoController@lista')
                         ->withInput(Request::only('nome'));
    }
}

