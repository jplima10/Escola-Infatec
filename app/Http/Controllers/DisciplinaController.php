<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{

    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('disciplina.index')->with('disciplinas', $disciplinas);
    }

   
    public function create()
    {
        $disciplina = new Disciplina();
        return view('disciplina.create');
    }
    

    public function store(Request $request)
    {
        $disciplina = new Disciplina();
        
        $disciplina->nome = $request->input('nome');
        $disciplina->data_criacao = $request->input('data_criacao');
        
        $disciplina->save();
        
        $disciplinas = $disciplina::all();
        return redirect()->route('disciplina.index')
            ->with('success', 'disciplina updated successfully');  
    }


    public function show($id)
    {
        $disciplina = Disciplina::find($id);
        if ($disciplina) {
            return view('disciplina.show')->with('disciplina', $disciplina);
        } else {
            return view('disciplina.show')->with('msg', 'disciplina não encontrado!');
        }
    }


    public function edit($id)
    {
        $disciplina = Disciplina::find($id);
        if ($disciplina) {
            return view('disciplina.edit')->with('disciplina', $disciplina);
        } else {
            $disciplinas = Disciplina::all();            
            return view('docentes.index')->with('disciplinas', $disciplinas);
        }
    }


    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::find($id);

        $disciplina->nome = $request->input('nome');
        $disciplina->data_criacao = $request->input('data_criacao');

        $disciplina->save();

        $disciplinas = Disciplina::all();
        return redirect()->route('disciplina.index')
            ->with('success', 'disciplina updated successfully');
    }

    public function destroy($id)
    {
        $disciplina = Disciplina::find($id);

        $disciplina->delete();
        
        $disciplinas = Disciplina::all();
        return redirect()->route('disciplina.index')
            ->with('success', 'disciplina updated successfully');
    }
}
