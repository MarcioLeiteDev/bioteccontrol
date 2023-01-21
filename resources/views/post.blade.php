@extends('template/template')

@section('title' , 'Dedetizadora e Desentupidora')

@section('content')

<div class="container bg-white p-2">
@foreach($conteudo as $valor) 

<img src="./../image/{{$valor->image}}" width="100%" title="{{$valor->title}}"/>
  {!! $valor->content !!}


@endforeach
</div>

@endsection