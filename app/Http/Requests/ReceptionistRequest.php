<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceptionistRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nama receptionist harus diisi',
            'name.max' => 'maximal nama receptionist 100 karakter',
        ];
    }
}
