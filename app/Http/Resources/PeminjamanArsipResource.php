<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeminjamanArsipResource extends JsonResource
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
             "session_id" => $this->id,
            "token_surat" => openssl_encrypt($this->id, "BF-CBC", openssl_digest(php_uname(), 'MD5', TRUE), 0, random_bytes(openssl_cipher_iv_length("BF-CBC"))),
            "nama_peminjam" => $this->nama_peminjam,
            "jenis_arsip" => $this->jenis_arsip,
            "kode_arsip" => $this->kode_arsip,
            "tanggal_peminjaman" => $this->tanggal_peminjaman,
            "tanggal_pengembalian" => $this->tanggal_pengembalian,
            "uploaded_at" => $this->created_at,
        ];
    }
}
