
@extends('layout.principal')
@section('conteudo')
    @if(empty($produtos))
        <div>Voce não tem nenhum produto cadastrado</div>
    @else    
        <h1>Listagem de produtos</h1>
        <table  class="table table-striped table-bordered table-hover">
            @foreach($produtos as $p)
            <tr class="{{ $p->quantidade <= 1 ? 'danger': '' }}">
                <td>{{$p->nome }}</td>
                <td>{{$p->valor }}</td>
                <td>{{$p->descricao }}</td>
                <td>{{ $p->quantidade }}</td>
                <td>
                    <a href="/produtos/mostra/{{ $p->id}} ">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td> 
                <td>
                    <a href="{{action('ProdutoController@remove',$p->id)}}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>  
                <td>
                    <a href="{{action('ProdutoController@altera',$p->id)}}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </td> 
            </tr>
            @endforeach
        </table>    
    @endif  
    <h4>
        <span class="label label-danger pull-right">
            Um ou menos no estoque
        </span>    
    </h4>  
@endsection

        