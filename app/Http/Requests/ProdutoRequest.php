<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nome'=>'required|min:3|max:100',
            'valor'=>'required|numeric',
            'descricao'=>'required',
            'quantidade'=>'required|numeric'
        ];
    }
}
