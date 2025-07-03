@extends('layouts.app')

@section('title', 'Editar Tarefa')
@section('header', '✏️ Editar Tarefa')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro!</strong> Corrija os campos abaixo:<br><br>
        <ul class="mb-0">
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/atualizar/{{ $tarefa->id }}">
        @csrf

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $tarefa->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="3">{{ $tarefa->descricao }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="/" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
