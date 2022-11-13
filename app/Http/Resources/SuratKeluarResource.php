<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SuratKeluarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'session_id' => $this->id,
            'token_surat' => openssl_encrypt(
                $this->id,
                'BF-CBC',
                openssl_digest(php_uname(), 'MD5', true),
                0,
                random_bytes(openssl_cipher_iv_length('BF-CBC'))
            ),
            'tanggal_surat' => $this->tanggal_surat,
            'nomor_surat' => $this->nomor_surat,
            'asal' => $this->tujuan,
            'kode_klasifikasi' => $this->kode_klasifikasi,
            'perihal' => $this->perihal,
            'kode_filling' => $this->kode_filling,
            'keterangan' => $this->keterangan,
            'dokumen' => $this->dokumen,
            'original_name_dokumen' => $this->original_name_dokumen,
            'uploaded_at' => $this->created_at,
        ];
    }
}
