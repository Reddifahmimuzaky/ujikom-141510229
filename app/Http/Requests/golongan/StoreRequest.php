<?php

namespace App\Http\Requests\jabatan;

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
            'kode_golongan' => 'Required',
            'nama_golongan' => 'Required',
            'besaran_uang' => 'Required'
        ];
    }

    public function messages()
    {
        return [
            'kode_golongan.required' => 'Kode Golongan Tidak Boleh Kosong.',
            'nama_golongan.required' => 'Nama Golongan Tidak Boleh Kosong.',
            'besaran_uang.required' => 'Besaran Uang Tidak Boleh Kosong.'
        ];
    }
}
