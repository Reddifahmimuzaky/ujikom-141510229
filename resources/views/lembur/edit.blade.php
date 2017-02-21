@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Data</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('lembur.update')}}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                        <div class="form-group">
                               <select name="kode_lembur_id" class="form-control">
                               <option>pilih Kategori Lembur</option>
                                   @foreach($kategori as $crud)
                                   <option value="{{$crud->id}}">{{$crud->nama_jabatan}}</option>
                                   @endforeach
                               </select>
                               </div>

                               <div class="form-group">
                               <select name="pegawai_id" class="form-control">
                               <option>Pilih Nama Pegawai</option>
                                   @foreach($pegawai as $crud)
                                   <option value="{{$crud->id}}">{{$crud->pegawai->user->name}}</option>
                                   @endforeach
                               </select>
                               </div>
                               
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('jumlah_jam') ? ' has-error' : '' }}">
                            <input type="text" name="jumlah_jam" class="form-control" placeholder="jam lembur" value="{{$tunjangan->jumlah_anak}}">
                            {!! $errors->first('jumlah_jam', '<p class="help-block">:message</p>') !!}
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection