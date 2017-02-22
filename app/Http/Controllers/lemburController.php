<?php

namespace App\Http\Controllers;

use Request;
use App\pegawai;
use App\KategoriLembur;
use App\LemburPegawai;
use App\Http\Requests\lembur\StoreRequest;

class lemburController extends Controller
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
        $lembur = LemburPegawai::all();
        return view('lembur.create',compact('pegawai','kategori','lembur'));
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
        $lembur = new LemburPegawai();
        $lembur->kode_lembur_id = $request->kode_lembur_id;
        $lembur->pegawai_id = $request->pegawai_id;
        $lembur->jumlah_jam = $request->jumlah_jam;
        $lembur->save();
        return redirect()->route('lembur.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
