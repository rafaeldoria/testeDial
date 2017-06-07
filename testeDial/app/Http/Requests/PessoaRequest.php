<?php

namespace Teste\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'nome' => 'required|max:100',
            'email' => 'required|max:100',
            'telefoneCelular' => 'required',
            'dataNascimento' => 'required|date',
            'cep' => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'nome.required' => 'O campo :attribute não pode estar vazio.',
            'email.required' => 'O campo :attribute não pode estar vazio.',
            'telefoneCelular.required' => 'O campo :attribute não pode estar vazio.',
            'dataNascimento.required' => 'O campo :attribute não pode estar vazio.',
            'cep.required' => 'O campo :attribute não pode estar vazio.',
            'nome.max' => 'Limite de caracteres do campo :attribute excedido.',
            'email.max' => 'Limite de caracteres do campo :attribute excedido.',             
            'cep.integer' => 'O campo :attribute deve conter apenas números.',
        ];
    }

}
