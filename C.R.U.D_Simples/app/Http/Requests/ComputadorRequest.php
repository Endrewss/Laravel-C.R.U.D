<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputadorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'marca' => 'required|max:50',
            'preco' => 'required|numeric|between:0,10000',
            'ram' => 'required|integer|between:1,100',
            'disco' => 'required|integer|between:1,1024',
        ];
    }
    public function messages(): array{
        return[
            'marca.required' => 'Marca é obrigatória',
            'marca.max' => 'Marca máximo de caracteres é 50',
            'preco.*' => 'Preço é obrigatório, números entre 0 e R$100.000,00',
            'ram.*' => 'Ram é obrigatória, números entre 1 e 100',
            'disco.*' => 'Disco obrigatório, números entre 1 e 1024'
        ];
    }
}
