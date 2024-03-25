<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class master_kendaraan_create_request extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nomor_plat' => 'unique:t_master_kendaraan|max:10',
            'nama_pemilik' => 'max:25|required'
        ];
    }

    public function attributes(){
        return [
            'nomor_plat' => 'Nomor Plat',
            'nama_pemilik' => 'Nama Pemilik'
        ];
    }
    
    public function messages()
    {
        return [
            'nomor_plat.required' => 'Nomor Plat wajib di isi',
            'nama_pemilik.required' => 'Nama Pemilik wajib di isi'
        ];
    }
}
