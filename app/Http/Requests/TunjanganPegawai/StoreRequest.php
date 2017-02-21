<?php

namespace App\Http\Requests\TunjanganPegawai;

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
            'kode_tunjangan_id' => 'Required',
            'pegawai_id' => 'Required',
        ];
    }
    public function messages()
    {
        return [
            'kode_tunjangan_id.required' => 'Kode Kategori Tidak Boleh Kosong.',
            'pegawai_id.required' => 'pegawai Tidak Boleh Kosong.',
            
        ];
    }
}
