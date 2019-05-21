@extends('layout.site')

@section('titulo','Lista de Contatos')
<h3>Essa é a view Index na rota de Contatos</h3>

@section('conteudo')
    @foreach($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->telefone }}</p>
    @endforeach
@endsection


