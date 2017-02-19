<?php

namespace App\Http\Controllers;

use Request;
use App\pegawai;
use App\KategoriLembur;
use App\LemburPegawai;

class lemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori = KategoriLembur::all();
        $pegawai = pegawai::all();
        $lembur = LemburPegawai::all();
        return view('lembur.index', compact('kategori','pegawai','lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = KategoriLembur::all();
        $pegawai = pegawai::all();

        return view('lembur.create',compact('pegawai','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lembur=Request::all();
        LemburPegawai::create($lembur);
        $lembur=LemburPegawai::all();
        return redirect('lembur');
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
        $lembur = LemburPegawai::findOrFail($id);
        $lembur->delete();
        return redirect()->route('lembur.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
