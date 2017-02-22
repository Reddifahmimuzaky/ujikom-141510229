<?php

namespace App\Http\Controllers;

use Request;
use App\pegawai;
use App\TunjanganPegawai;
use App\tunjangan;
use App\Http\Requests\TunjanganPegawai\StoreRequest;

class TunjanganPegawaiController extends Controller
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
        $pegawai = pegawai::all();
        $tunpeg = TunjanganPegawai::all();
        $tunjangan = tunjangan::all();
        return view('tunpeg.index', compact('pegawai','tunjangan','tunpeg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $pegawai = pegawai::all();
        $tunpeg = TunjanganPegawai::all();
        $tunjangan = tunjangan::all();
        return view('tunpeg.create',compact('pegawai','tunjangan','tunpeg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $tunpeg = new TunjanganPegawai();
        $tunpeg->tunjangan_id = $request->tunjangan_id;
        $tunpeg->pegawai_id = $request->pegawai_id;
        $tunpeg->save();
        return redirect()->route('tunpeg.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $tunpeg = TunjanganPegawai::findOrFail($id);
        $tunpeg->delete();
        return redirect()->route('tunpeg.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
