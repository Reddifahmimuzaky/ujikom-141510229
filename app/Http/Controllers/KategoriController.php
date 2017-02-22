<?php

namespace App\Http\Controllers;

use Request;
use App\KategoriLembur;
use App\golongan;
use App\jabatan;
use App\Http\Requests\kategori\StoreRequest;
use App\Http\Requests\kategori\UpdateRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kategori = KategoriLembur::all();
        $golongan = golongan::all();
        $jabatan = jabatan::all();
        return view('kategori.index', compact('kategori','jabatan','golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriLembur::all();
        $golongan = golongan::all();
        $jabatan = jabatan::all();
        return view('kategori.create',compact('kategori','jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
       $cruds = new KategoriLembur();
        $cruds->kode_lembur = $request->kode_lembur;
        $cruds->jabatan_id = $request->jabatan_id;
        $cruds->golongan_id = $request->golongan_id;
        $cruds->besaran_uang = $request->besaran_uang;
        $cruds->save();
        return redirect()->route('kategori.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $kategori = KategoriLembur::findOrFail($id);
        $golongan = golongan::all();
        $jabatan = jabatan::all();
        return view('kategori.edit', compact('kategori','golongan','jabatan'));
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
        $cruds = KategoriLembur::find($id);
        $cruds->kode_lembur = $request->kode_lembur;
        $cruds->jabatan_id = $request->jabatan_id;
        $cruds->golongan_id = $request->golongan_id;
        $cruds->besaran_uang = $request->besaran_uang;
        $cruds->save();
        return redirect()->route('kategori.index')->with('alert-success', 'Data Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = KategoriLembur::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
