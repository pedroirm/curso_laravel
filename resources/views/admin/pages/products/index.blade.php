@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
@include('admin.includes.alerts', ['content' => "Texto de teste"])
<a href="{{ route('products.create') }}">Cadastrar</a>
<hr>

@component('admin.components.card')
@slot('title')
<h1>Olá</h1>
@endslotz
Um card de exemplo
@endcomponent
<hr>

<h1>Exibindo os produtos</h1>

@if ($teste === 123)
é igual
@else
é diferente
@endif

@isset($teste)
{{ $teste }}
@endisset

@foreach ($teste2 as $item)
<p>{{$item}}</p>
@endforeach

@endsection