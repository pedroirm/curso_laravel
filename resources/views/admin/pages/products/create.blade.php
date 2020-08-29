@extends('admin.layouts.app')
@section('title', 'Cadastrar Novo Produto')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif
    <h1>Cadastrar Novo Produto</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="text" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
@endsection
