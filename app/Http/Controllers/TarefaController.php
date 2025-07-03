<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    // Página inicial com a lista de tarefas
    public function index() {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    // Formulário de nova tarefa
    public function create() {
        return view('tarefas.create');
    }

    // Salvar nova tarefa
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'nullable|max:255',
        ]);

        Tarefa::create($request->all());
        return redirect('/')->with('success', 'Tarefa criada com sucesso!');
    }
    
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.edit', compact('tarefa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'nullable|max:255',
        ]);

        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($request->all());

        return redirect('/')->with('success', 'Tarefa atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        return redirect('/')->with('success', 'Tarefa excluída com sucesso!');
    }
}
