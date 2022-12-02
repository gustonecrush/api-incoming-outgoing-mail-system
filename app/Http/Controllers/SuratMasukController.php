<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratMasukRequest;
use App\Http\Resources\SuratMasukResource;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    private $surats;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $this->surats = SuratMasuk::all();
        $suratResource = SuratMasukResource::collection($this->surats);
        return $this->sendResponse(
            $suratResource,
            'Successfully Get Surat Masuk!'
=======
        $this->surats = SuratMasuk::paginate(5);
        $suratResource = SuratMasukResource::collection($this->surats);
        return $this->sendResponse(
            $suratResource,
            'Successfully Get Surat Masuk!',
            $this->surats->total()
>>>>>>> 37005da (reupload sisuka)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratMasukRequest $request)
    {
        $dokumen = $request->file('dokumen')->store('dokumen-surat-masuk');
        $originalDokumen = $request->file('dokumen')->getClientOriginalName();

        $surat = SuratMasuk::create([
            'tanggal_surat' => $request->tanggal_surat,
            'nomor_surat' => $request->nomor_surat,
            'asal' => $request->asal,
            'kode_klasifikasi' => $request->kode_klasifikasi,
            'perihal' => $request->perihal,
            'kode_filling' => $request->kode_filling,
            'keterangan' => $request->keterangan,
            'dokumen' => $dokumen,
            'original_name_dokumen' => $originalDokumen,
        ]);

        return $this->sendResponse(
            new SuratMasukResource($surat),
            'Successfully Post Surat Masuk!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        //
    }

    public function updateById(Request $request, $id)
    {
        SuratMasuk::where('id', '=', (int) $id)->update($request->all());
        $surat = SuratMasuk::find((int) $id);
        return $this->sendResponse(
            new SuratMasukResource($surat),
            "Successfully Update $request->nomor_surat!"
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        $suratMasuk->delete();
        Storage::delete($suratMasuk->dokumen);
        return $this->sendResponse(
            new SuratMasukResource($suratMasuk),
            "Successfully Delete $suratMasuk->nomor_surat!"
        );
    }
}
