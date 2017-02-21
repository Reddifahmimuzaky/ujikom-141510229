<?php

namespace App\Http\Requests\lembur;

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
            'kode_lembur_id' => 'Required',
            'pegawai_id' => 'Required',
            'jumlah_jam' => 'Required'
        ];
    }
    public function messages()
    {
        return [
            'kode_lembur_id.required' => 'Kode Lembur Tidak Boleh Kosong.',
            'pegawai_id.required' => 'Pegawai Tidak Boleh Kosong.',
            'jumlah_jam.required' => 'Jumlah Jam Tidak Boleh Kosong.'
        ];
    }
}
