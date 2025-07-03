@extends('layouts.app')

@section('title', 'Lista de Tarefas')
@section('header', '📋 Lista de Tarefas')

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

    <a href="/nova" class="btn btn-primary mb-3">➕ Nova Tarefa</a>

    @if(count($tarefas) > 0)
        <ul class="list-group">
            @foreach ($tarefas as $tarefa)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5>{{ $tarefa->titulo }}</h5>
                        <p class="mb-0 text-muted">{{ $tarefa->descricao }}</p>
                    </div>
                    <div>
                        <a href="/editar/{{ $tarefa->id }}" class="btn btn-sm btn-outline-secondary">Editar</a>

                        <form action="/excluir/{{ $tarefa->id }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-warning">Nenhuma tarefa cadastrada ainda.</div>
    @endif
@endsection
