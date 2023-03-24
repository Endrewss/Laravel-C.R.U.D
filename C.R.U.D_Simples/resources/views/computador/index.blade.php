@extends('base')
@section('conteudo')
    <a href="/computadores/create">Novo</a>
    <p>Marca Preço RAM Disco</p>
    @foreach($ComputadorCollection as $computador)
        <p>{{$computador -> marca}} {{$computador -> preco}} {{$computador -> ram}} {{$computador -> disco}}
        <a href="/computadores/{{$computador->id}}/edit">Editar</a>
        <a href="/computadores/{{$computador->id}}">Excluir</a>
        </p>
    @endforeach
    {{$ComputadorCollection->links('pagination::bootstrap-4')}}
@endsection