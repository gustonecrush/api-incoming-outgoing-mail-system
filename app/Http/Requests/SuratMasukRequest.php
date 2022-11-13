<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SuratMasukRequest extends FormRequest
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
            "tanggal_surat" => "required|date",
            "nomor_surat" => "required|string|unique:surat_masuks",
            "asal" => "required|string",
            "kode_klasifikasi" => "required|string",
            "perihal" => "required|string",
            "kode_filling" => "required|string",
            "keterangan" => "required|string",
            "dokumen" => "required|mimes:pdf|max:20000"
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            "success" => false,
            "status_code" => 404,
            "message" => "Validation Error!",
            "errors" => $validator->errors()
        ]));
    }
}
