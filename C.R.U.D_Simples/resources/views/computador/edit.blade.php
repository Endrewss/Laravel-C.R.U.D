@extends('base')
@section('conteudo')
    <form action="/computadores/{{$objetoComputador -> id}}" method='post'>
        @method('put')
        @csrf
        <p>Marca: <input type="text" name='marca' value="{{empty(old('marca')) ? $objetoComputador-> marca : old ('marca')}}"></p>
        @if($errors->has('marca'))
            <p>{{$errors->first('marca')}}</p>
        @endif
        <p>Preço: <input type="number" name='preco' step= '0.01' value="{{empty(old('preco')) ? $objetoComputador-> preco : old ('preco')}}"></p>
        @if($errors->has('preco'))
            <p>{{$errors->first('preco')}}</p>
        @endif
        <p>RAM: <input type="number" name='ram' value="{{empty(old('ram')) ? $objetoComputador-> ram : old ('ram')}}"></p>
        @if($errors->has('ram'))
            <p>{{$errors->first('ram')}}</p>
        @endif
        <p>Disco: <input type="number" name='disco' value="{{empty(old('disco')) ? $objetoComputador-> disco : old ('disco')}}"></p>
        @if($errors->has('disco'))
            <p>{{$errors->first('disco')}}</p>
        @endif
        <p>
            <input type="submit" value='enviar'/>
            <a href="/computadores">Voltar</a>
        </p>
    </form>
@endsection