<?php

namespace App\Http\Controllers;

use Request;
use App\golongan;
use App\jabatan;
use App\tunjangan;
use App\Http\Requests\tunjangan\StoreRequest;
use App\Http\Requests\tunjangan\UpdateRequest;

class TunjanganController extends Controller
{
    public function index()
    {
        //
        
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        $tunjangan = tunjangan::all();
        return view('tunjangan.index', compact('jabatan','golongan','tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        $tunjangan = tunjangan::all();

        return view('tunjangan.create',compact('jabatan','golongan','tunjangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $tunjangan = new tunjangan();
        $tunjangan->kode_tunjangan = $request->kode_tunjangan;
        $tunjangan->jabatan_id = $request->jabatan_id;
        $tunjangan->golongan_id = $request->golongan_id;
        $tunjangan->status = $request->status;
        $tunjangan->jumlah_anak = $request->jumlah_anak;
        $tunjangan->besaran_uang = $request->besaran_uang;
        $tunjangan->save();
        return redirect()->route('tunjangan.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tunjangan = tunjangan::findOrFail($id);
        $golongan = golongan::all();
        $jabatan = jabatan::all();
        return view('tunjangan.edit', compact('tunjangan','golongan','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $tunjangan = tunjangan::find($id);
        $tunjangan->kode_tunjangan = $request->kode_tunjangan;
        $tunjangan->jabatan_id = $request->jabatan_id;
        $tunjangan->golongan_id = $request->golongan_id;
        $tunjangan->status = $request->status;
        $tunjangan->jumlah_anak = $request->jumlah_anak;
        $tunjangan->besaran_uang = $request->besaran_uang;
        $cruds->save();
        return redirect()->route('tunjangan.index')->with('alert-success', 'Data Berhasil Diubah.');
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
        $tunjangan = tunjangan::findOrFail($id);
        $tunjangan->delete();
        return redirect()->route('tunjangan.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
