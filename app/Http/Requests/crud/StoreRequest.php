<?php

namespace App\Http\Requests\crud;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'besaran_uang' => 'required',
            'kode_golongan' => 'required',
            'nama_golongan' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'kode_jabatan.required' => 'Kode Jabatan Tidak Boleh Kosong.',
            'nama_jabatan.required' => 'Nama Jabatan Tidak Boleh Kosong.',
            'besaran_uang.required' => 'Besaran Uang Tidak Boleh Kosong.',
            'kode_golongan.required' => 'Kode Golongan Tidak Boleh Kosong.',
            'nama_golongan.required' => 'Nama Golongan Tidak Boleh Kosong.'
        ];
    }
}
