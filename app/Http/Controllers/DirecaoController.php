<?php

namespace App\Http\Controllers;

use App\Models\Direcao;
use App\Models\Disciplina;
use App\Models\Docente;
use App\Models\Aluno;
use App\Http\Requests\DirecaoRequest;
use App\Models\Turma;

/**
 * Class DirecaoController
 * @package App\Http\Controllers
 */
class DirecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direcaos = Direcao::all(); // Recupera todos os diretores
        
        return view('direcao.index', compact('direcaos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $direcao = new Direcao();
        return view('direcao.create', compact('direcao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DirecaoRequest $request)
    {
        Direcao::create($request->validated());

        return redirect()->route('direcao.index')
            ->with('success', 'Direcao created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $direcao = Direcao::find($id);

        return view('direcao.show', compact('direcao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $direcao = Direcao::find($id);

        return view('direcao.edit', compact('direcao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DirecaoRequest $request, Direcao $direcao)
    {
        $request->validate([
            'CPF' => 'required|unique:direcaos,CPF,' . $direcao->id,
            // Outras regras de validação, se houver
        ], [
            'CPF.unique' => 'CPF já está sendo utilizado.'
            // Outras mensagens de erro, se necessário
        ]);

        $direcao->update($request->validated());

        return redirect()->route('direcao.index')
            ->with('success', 'Direcao updated successfully');
    }

    public function destroy($id)
    {
        Direcao::find($id)->delete();

        return redirect()->route('direcao.index')
            ->with('success', 'Direcao deleted successfully');
    }
}
