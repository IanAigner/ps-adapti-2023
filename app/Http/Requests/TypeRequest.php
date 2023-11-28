<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeRequest extends FormRequest
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
            'type' => ['required', 'string', 'max:100']
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'O campo precisa ser informado',
            'type.max' => 'O campo ter no máximo 100 caracteres'
        ];
    }
}
