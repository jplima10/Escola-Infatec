<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{

    public function index()
    {
        $docentes = Docente::all();
        return view('docente.index')->with('docentes', $docentes);
    }

   
    public function create()
    {
        $docente = new Docente();
        return view('docente.create');
    }
    

    public function store(Request $request)
    {
        $docente = new Docente();
        
        $docente->nome = $request->input('nome');
        $docente->CPF = $request->input('CPF');
        $docente->data_nascimento = $request->input('data_nascimento');
        
        $docente->save();
        
        $docentes = $docente::all();
        return redirect()->route('docente.index')
            ->with('success', 'Docente updated successfully');  
    }


    public function show($id)
    {
        $docente = Docente::find($id);
        if ($docente) {
            return view('docente.show')->with('docente', $docente);
        } else {
            return view('docente.show')->with('msg', 'Docente não encontrado!');
        }
    }


    public function edit($id)
    {
        $docente = Docente::find($id);
        if ($docente) {
            return view('docente.edit')->with('docente', $docente);
        } else {
            $docentes = Docente::all();            
            return view('docentes.index')->with('docentes', $docentes);
        }
    }


    public function update(Request $request, $id)
    {
        $docente = Docente::find($id);

        $request->validate([
            'CPF' => 'required|unique:docentes,CPF,' . $id,
            // Outras regras de validação, se houver
        ], [
            'CPF.unique' => 'CPF já está sendo utilizado.'
            // Outras mensagens de erro, se necessário
        ]);

        $docente->nome = $request->input('nome');
        $docente->CPF = $request->input('CPF');
        $docente->data_nascimento = $request->input('data_nascimento');

        $docente->save();

        $docentes = Docente::all();
        return redirect()->route('docente.index')
            ->with('success', 'Docente updated successfully');
    }

    public function destroy($id)
    {
        $docente = Docente::find($id);

        $docente->delete();
        
        $docentes = Docente::all();
        return redirect()->route('docente.index')
            ->with('success', 'Docente updated successfully');
    }
}
