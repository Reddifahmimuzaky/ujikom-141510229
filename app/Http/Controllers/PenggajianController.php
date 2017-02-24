<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests\penggajian\StoreRequest;
use App\TunjanganPegawai;
use App\penggajian;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('keuangan');
    }
    public function index()
    {
        $tunpeg = TunjanganPegawai::all();
        $penggajian = penggajian::all();
        return view('penggajian.index', compact('tunpeg','penggajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tunpeg = TunjanganPegawai::all();
        $penggajian = penggajian::all();
     return view('penggajian.create', compact('tunpeg','penggajian'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $penggajian = new penggajian();
        $penggajian->tunjangan_pegawai_id = $request->tunjangan_pegawai_id;
        $penggajian->jumlah_jam_lembur = $request->jumlah_jam_lembur;
        $penggajian->jumlah_uang_lembur = $request->jumlah_uang_lembur;
        $penggajian->tanggal_pengambilan = $request->tanggal_pengambilan;
        $penggajian->gaji_pokok = $request->gaji_pokok;
        $penggajian->total_gaji = $request->total_gaji;
        $penggajian->status_pengambilan = $request->status_pengambilan;
        $penggajian->petugas_penerima = $request->petugas_penerima;
        $penggajian->save();
        return redirect()->route('penggajian.index')->with('alert-success', 'Data Berhasil Disimpan.');

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
    public function show($id)
    {
       $tunpeg = TunjanganPegawai::all();
        $penggajian = penggajian::all();
        return view('penggajian.show', compact('tunpeg','penggajian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
