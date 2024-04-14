<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirecaoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Defina como `true` se a autorização não for necessária para esta solicitação
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nome' => 'nullable',
            'CPF' => 'nullable',
            'data_nascimento' => 'nullable',
            'email' => 'nullable',
        ];
    }
}
