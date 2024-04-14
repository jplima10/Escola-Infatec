<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direcao;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $direcao = Direcao::where('email', $credentials['email'])->where('cpf', $credentials['password'])->first();

        if ($direcao) {
            // Redireciona diretamente para a homescreen
            return redirect()->route('homescreen.index');
        } else {
            // Se não for encontrado, redireciona de volta para a página de login com uma mensagem de erro
            return redirect()->route('login')->with('error', 'Credenciais inválidas. Por favor, tente novamente.');
        }
    }
}

