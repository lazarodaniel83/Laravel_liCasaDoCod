@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado    
    </div>
    
@else
    <h1>Listagem de produtos</h1>
    <table class="table table-striped ...">
        @foreach($produtos as $p)
        @endforeach
    </table>
@endif
<h4>
    <span class="label label-danger pull-right">
        Um ou menos items no estoque
    </span>    
</h4>        

@if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O produto {{old('nome')}} adicionado com sucesso!
    </div> 
@endif   
@endsection