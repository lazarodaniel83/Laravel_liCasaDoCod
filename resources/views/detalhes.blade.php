
@extends('principal')
@section('conteudo')
    <h1>Detalhe do produto: <?=$p->nome ?></h1>
    <ul>
        <li>
            <b>Valor: </b>R$<?=$p->valor?>
        </li>
        <li>
            <b>Descrição: </b><?=$p->descricao?>
        </li>
        <li>
            <b>Quantidade em estoque: </b><?=$p->quantidade?>
        </li>
    </ul>

@endsection
            
      