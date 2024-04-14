<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;


class TurmaController extends Controller
{

    public function index()
    {
        $turmas = Turma::all();
        return view('turma.index')->with('turmas', $turmas);
    }

   
    public function create()
    {
        $turma = new Turma();
        return view('turma.create');
    }
    

    public function store(Request $request)
    {
        $turma = new Turma();
        
        $turma->nome = $request->input('nome');
        $turma->ano = $request->input('ano');
        $turma->data_criacao = $request->input('data_criacao');
        
        $turma->save();
        
        $turmas = $turma::all();
        return redirect()->route('turma.index')
            ->with('success', 'turma updated successfully');  
    }


    public function show($id)
    {
        $turma = Turma::find($id);
        if ($turma) {
            return view('turma.show')->with('turma', $turma);
        } else {
            return view('turma.show')->with('msg', 'turma não encontrado!');
        }
    }


    public function edit($id)
    {
        $turma = Turma::find($id);
        if ($turma) {
            return view('turma.edit')->with('turma', $turma);
        } else {
            $turmas = Turma::all();            
            return view('docentes.index')->with('turmas', $turmas);
        }
    }


    public function update(Request $request, $id)
    {
        $turma = Turma::find($id);

        $turma->nome = $request->input('nome');
        $turma->ano = $request->input('ano');
        $turma->data_criacao = $request->input('data_criacao');

        $turma->save();

        $turmas = Turma::all();
        return redirect()->route('turma.index')
            ->with('success', 'turma updated successfully');
    }

    public function destroy($id)
    {
        $turma = Turma::find($id);

        $turma->delete();
        
        $turmas = Turma::all();
        return redirect()->route('turma.index')
            ->with('success', 'Turma updated successfully');
    }
}
