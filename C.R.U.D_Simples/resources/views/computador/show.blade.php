@extends('base')
@section('conteudo')
<dl>
    <dt>Marca</dt>
    <dd>{{$objetoComputador->marca}}</dd>
    <dt>Preço</dt>
    <dd>{{$objetoComputador->preco}}</dd>
    <dt>RAM</dt>
    <dd>{{$objetoComputador->ram}}</dd>
    <dt>Disco</dt>
    <dd>{{$objetoComputador->disco}}</dd>
</dl>
<form action="/computadores/{{$objetoComputador->id}}" method='post'>
    @csrf
    @method('delete')
    <input type="submit" value='Confirmar'/>
    <a href="/computadores"> Voltar </a>
</form>
@endsection