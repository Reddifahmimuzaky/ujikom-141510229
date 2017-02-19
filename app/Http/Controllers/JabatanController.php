<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use App\Http\Requests;
use App\Http\Requests\crud\StoreRequest;
use App\Http\Requests\crud\UpdateRequest;

class JabatanController extends Controller
{
    //
     public function index()
    {
        $jabatan = jabatan::all();
        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $cruds = new jabatan();
        $cruds->kode_jabatan = $request->kode_jabatan;
        $cruds->nama_jabatan = $request->nama_jabatan;
        $cruds->besaran_uang = $request->besaran_uang;
        $cruds->save();
        return redirect()->route('jabatan.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $jabatan = jabatan::findOrFail($id);
        return view('jabatan.edit', compact('jabatan'));
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
        $cruds = jabatan::find($id);
        $cruds->kode_jabatan = $request->kode_jabatan;
        $cruds->nama_jabatan = $request->nama_jabatan;
        $cruds->besaran_uang = $request->besaran_uang;
        $cruds->save();
        return redirect()->route('jabatan.index')->with('alert-success', 'Data Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = jabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('jabatan.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
