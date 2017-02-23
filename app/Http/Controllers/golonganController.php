<?php

namespace App\Http\Controllers;

use Request;
use App\golongan;
use App\Http\Requests\gol\StoreRequest;
use App\Http\Requests\gol\UpdateRequest;

class golonganController extends Controller
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
        $cruds = golongan::all();
        return view('golongan.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $cruds = new golongan();
        $cruds->kode_golongan = $request->kode_golongan;
        $cruds->nama_golongan = $request->nama_golongan;
        $cruds->besaran_uang = $request->besaran_uang;
        $cruds->save();
        return redirect()->route('golongan.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $cruds = golongan::findOrFail($id);
        return view('golongan.edit', compact('cruds'));
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
        $cruds = golongan::find($id);
        $cruds->kode_golongan = $request->kode_golongan;
        $cruds->nama_golongan = $request->nama_golongan;
        $cruds->besaran_uang = $request->besaran_uang;
        $cruds->save();
        return redirect()->route('golongan.index')->with('alert-success', 'Data Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cruds = golongan::findOrFail($id);
        $cruds->delete();
        return redirect()->route('golongan.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
