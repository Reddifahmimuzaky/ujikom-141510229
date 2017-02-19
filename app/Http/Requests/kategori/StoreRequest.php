<?php

namespace App\Http\Requests\kategori;

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
            'kode_lembur' => 'Required',
            'jabatan_id' => 'Required',
            'golongan_id' => 'Required',
            'besaran_uang' => 'Required'
        ];
    }
    public function messages()
    {
        return [
            'kode_lembur.required' => 'Kode Kategori Tidak Boleh Kosong.',
            'jabatan_id.required' => 'Jabatan Tidak Boleh Kosong.',
            'golongan_id.required' => 'Golongan Tidak Boleh Kosong.',
            'besaran_uang.required' => 'Besaran Uang Tidak Boleh Kosong.'
        ];
    }
}
