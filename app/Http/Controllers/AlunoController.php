<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = Aluno::all(); // Recupera todos os alunos
        return view('aluno.index')->with('alunos', $alunos); // Passa os alunos para a view
    }



    public function create()
    {
        $aluno = new Aluno();
        return view('aluno.create');
    }


    public function store(Request $request)
    {
        $aluno = new Aluno();
        
        $aluno->nome = $request->input('nome');
        $aluno->CPF = $request->input('CPF');
        $aluno->data_nascimento = $request->input('data_nascimento');
        
        $aluno->save();
        
        $alunos = $aluno::all();
        return redirect()->route('aluno.index')
            ->with('success', 'aluno updated successfully');
    }


    public function show($id)
    {
        $aluno = Aluno::find($id);
        if ($aluno) {
            return view('aluno.show')->with('aluno', $aluno);
        } else {
            return view('aluno.show')->with('msg', 'aluno não encontrado!');
        }
    }


    public function edit($id)
    {
        $aluno = Aluno::find($id);
        if ($aluno) {
            return view('aluno.edit')->with('aluno', $aluno);
        } else {
            $alunos = Aluno::all();            
            return view('alunos.index')->with('alunos', $alunos);
        }
    }


    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $aluno->nome = $request->input('nome');
        $aluno->CPF = $request->input('CPF');
        $aluno->data_nascimento = $request->input('data_nascimento');

        $aluno->save();

        $alunos = Aluno::all();
        return redirect()->route('aluno.index')
            ->with('success', 'Aluno updated successfully');
    }


    public function destroy($id)
    {
        $aluno = Aluno::find($id);

        $aluno->delete();
        
        $alunos = Aluno::all();
        return redirect()->route('aluno.index')
            ->with('success', 'Aluno updated successfully');
    }
}
