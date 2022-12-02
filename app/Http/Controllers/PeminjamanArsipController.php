<?php

namespace App\Http\Controllers;

use App\Http\Resources\PeminjamanArsipResource;
use App\Models\PeminjamanArsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeminjamanArsipController extends Controller
{
    private $peminjamans;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $this->peminjamans = PeminjamanArsip::all();
=======
        $this->peminjamans = PeminjamanArsip::paginate(5);
>>>>>>> 37005da (reupload sisuka)
        $peminjamanResource = PeminjamanArsipResource::collection(
            $this->peminjamans
        );
        return $this->sendResponse(
            $peminjamanResource,
<<<<<<< HEAD
            'Successfully Get Peminjaman Surat!'
=======
            'Successfully Get Peminjaman Surat!',
            $this->peminjamans->total()
>>>>>>> 37005da (reupload sisuka)
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arsip = PeminjamanArsip::create([
            'nama_peminjam' => $request->nama_peminjam,
            'jenis_arsip' => $request->jenis_arsip,
            'kode_arsip' => $request->kode_arsip,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ]);

        return $this->sendResponse(
            new PeminjamanArsipResource($arsip),
            'Successfully Post Peminjaman Arsip!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeminjamanArsip  $peminjamanArsip
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanArsip $peminjamanArsip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeminjamanArsip  $peminjamanArsip
     * @return \Illuminate\Http\Response
     */
    public function edit(PeminjamanArsip $peminjamanArsip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeminjamanArsip  $peminjamanArsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeminjamanArsip $peminjamanArsip)
    {
        $peminjamanArsip->nama_peminjam = $request->nama_peminjam;
        $peminjamanArsip->jenis_arsip = $request->jenis_arsip;
        $peminjamanArsip->kode_arsip = $request->kode_arsip;
        $peminjamanArsip->tanggal_peminjaman = $request->tanggal_peminjaman;
        $peminjamanArsip->tanggal_pengembalian = $request->tanggal_pengembalian;
        $peminjamanArsip->save();

        return $this->sendResponse(new PeminjamanArsipResource($peminjamanArsip), "Successfully Update Peminjaman $peminjamanArsip->kode_arsip!");
    }

    public function updateById(Request $request, $id) 
    {
        PeminjamanArsip::where('id', '=', (int)$id)->update($request->all());
        $peminjamanArsip = PeminjamanArsip::find((int)$id);
        return $this->sendResponse(new PeminjamanArsipResource($peminjamanArsip),"Successfully Update Peminjaman!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeminjamanArsip  $peminjamanArsip
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeminjamanArsip $peminjamanArsip)
    {
        $peminjamanArsip->delete();
        return $this->sendResponse(
            new PeminjamanArsipResource($peminjamanArsip),
            "Successfully Delete Peminjaman $peminjamanArsip->kode_arsip!"
        );
    }
}
