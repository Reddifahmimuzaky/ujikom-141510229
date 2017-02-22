<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pegawai;
use App\jabatan;
use App\golongan;
use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Input;

class PegawaiController extends Controller
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
    use RegistersUsers;

    public function index()
    {
        //
        $pegawai = pegawai::all();
        $golongan = golongan::all();
        $user = User::all();
        return view('pegawai.index', compact('pegawai','golongan','user'));
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
        return view('pegawai.create',compact('jabatan','golongan'));
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
        $file=Input::file('photo');
        $destination=public_path().'/assets ';
        $filename=$file->getClientOriginalName();
        $uploadsuccess=$file->move($destination,$filename);

        if(Input::hasFile('photo')){
            $user=User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permission' => $request->get('permission'),
            'password' => bcrypt($request->get('password')),
        ]);

            $pegawai= new pegawai;
            $pegawai->nip=$request->get('nip');
            $pegawai->user_id=$user->id;
            $pegawai->jabatan_id=$request->get('jabatan_id');
            $pegawai->golongan_id=$request->get('golongan_id');
            $pegawai->photo=$filename;
        $pegawai->save();

        }
        return redirect('pegawai');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $pegawai = pegawai::findOrFail($id);
        $jabatan=jabatan::all();
        $golongan=golongan::all();
        return view('pegawai.edit', compact('pegawai','jabatan','golongan'));
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
        $pegawaiUpdate=Request::all();
        $pegawai=pegawai::find($id);
        $pegawai->update($pegawaiUpdate);
        return redirect('pegawai');
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
        $pegawai = pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
