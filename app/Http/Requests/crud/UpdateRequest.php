<?php

namespace App\Http\Requests\crud;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required',
            'besaran_uang' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'kode_jabatan.required' => 'Kode ulah kosong ,goblog.',
            'nama_jabatan.required' => 'nama ulah kosong.',
            'besaran_uang.required' => 'isian duitna.'
        ];
    }
}
