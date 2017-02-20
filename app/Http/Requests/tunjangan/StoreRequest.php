<?php

namespace App\Http\Requests\tunjangan;

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
            'kode_tunjangan' => 'Required',
            'jabatan_id' => 'Required',
            'golongan_id' => 'Required',
            'status' => 'Required',
            'jumlah_anak' => 'Required',
            'besaran_uang' => 'Required'
        ];
    }
    public function messages()
    {
        return [
            'kode_tunjangan.required' => 'Kode Kategori Tidak Boleh Kosong.',
            'jabatan_id.required' => 'Jabatan Tidak Boleh Kosong.',
            'golongan_id.required' => 'Golongan Tidak Boleh Kosong.',
            'status.required' => 'Status Tidak Boleh Kosong.',
            'jumlah_anak.required' => 'Jumlah Anak Tidak Boleh Kosong.',
            'besaran_uang.required' => 'Besaran Uang Tidak Boleh Kosong.'
        ];
    }
}
