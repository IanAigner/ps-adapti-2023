<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'string', 'max: 100'],
            'descricao' => ['max:3000'],
            'contratado' => ['nullable', 'boolean'],
            'imagem' => ['image'],
            'curso_id' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo precisa ser informado',
            'nome.max' => 'O campo deve ter no máximo 100 caracteres',
            'descricao.max' => 'O campo deve ter no máximo 3000 caracteres',
            'imagem.image' => 'A imagem precisa ser dos tipos PNG, JPEG, JPG, etc.',
        ];
    }
}