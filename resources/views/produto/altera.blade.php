@extends('layout.principal')

@section('conteudo')

<h1 class="center">Atualizar produto: #{{ $p->id }}</h1>

<form action="/produtos/alterado/{{ $p->id }}" method="post">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
           <label>Nome</label>
            <input id="nome" name="nome" class="form-control" placeholder="{{ $p->nome }}">
        </div>
        <div class="form-group">
           <label>Valor</label>
            <input id="valor" name="valor" class="form-control" placeholder="{{ $p->valor }}">
        </div>
        <div class="form-group">
           <label>Quantidade</label>
            <input id="quantidade" name="quantidade" class="form-control" type="number" placeholder="{{ $p->quantidade }}">
        </div>
  <div class="form-group">
    <label>Tamanho</label>
    <input id="tamanho" name="descricao" class="form-control" placeholder="{{ $p->tamanho }}">
  
    <label>Descrição</label>
    <textarea id="descricao" name="descricao" class="form-control" placeholder="{{ $p->descricao }}"></textarea>
  </div>
       <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection