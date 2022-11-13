<?php

namespace App\Http\Controllers;

use App\Http\Resources\SuratKeluarResource;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    private $surats;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->surats = SuratKeluar::all();
        $suratResource = SuratKeluarResource::collection($this->surats);
        return $this->sendResponse(
            $suratResource,
            'Successfully Get Surat Keluar!'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokumen = $request->file('dokumen')->store('dokumen-surat-keluar');
        $originalDokumen = $request->file('dokumen')->getClientOriginalName();

        $surat = SuratKeluar::create([
            'tanggal_surat' => $request->tanggal_surat,
            'nomor_surat' => $request->nomor_surat,
            'tujuan' => $request->tujuan,
            'kode_klasifikasi' => $request->kode_klasifikasi,
            'perihal' => $request->perihal,
            'kode_filling' => $request->kode_filling,
            'keterangan' => $request->keterangan,
            'dokumen' => $dokumen,
            'original_name_dokumen' => $originalDokumen,
        ]);

        return $this->sendResponse(
            new SuratKeluarResource($surat),
            'Successfully Post Surat Keluar!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        //
    }

    public function updateById(Request $request, $id) 
    {
        SuratKeluar::where('id', '=', (int)$id)->update($request->all());
        $surat = SuratKeluar::find((int)$id);
        return $this->sendResponse(new SuratKeluarResource($surat), "Successfully Update $request->nomor_surat!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeluar $suratKeluar)
    {
        $suratKeluar->delete();
        Storage::delete($suratKeluar->dokumen);
        return $this->sendResponse(
            new SuratKeluarResource($suratKeluar),
            "Successfully Delete $suratKeluar->nomor_surat!"
        );
    }
}
