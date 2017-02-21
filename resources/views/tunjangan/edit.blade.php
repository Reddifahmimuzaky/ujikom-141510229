@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Data</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('tunjangan.update', $tunjangan->id)}}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('kode_tunjangan') ? ' has-error' : '' }}">
                            <input type="text" name="kode_tunjangan" class="form-control" placeholder="kode Tunjangan" value="{{$tunjangan->kode_tunjangan}}">
                            {!! $errors->first('kode_tunjangan', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                               <select name="jabatan_id" class="form-control">
                               <option>pilih jabatan</option>
                                   @foreach($jabatan as $crud)
                                   <option value="{{$crud->id}}">{{$crud->nama_jabatan}}</option>
                                   @endforeach
                               </select>
                               </div>

                               <div class="form-group">
                               <select name="golongan_id" class="form-control">
                               <option>Pilih Nama Golongan</option>
                                   @foreach($golongan as $crud)
                                   <option value="{{$crud->id}}">{{$crud->nama_golongan}}</option>
                                   @endforeach
                               </select>
                               </div>
                               <div class="form-group">
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <input type="text" name="status" class="form-control" placeholder="Status" value="{{$tunjangan->status}}">
                            {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
                            <input type="text" name="jumlah_anak" class="form-control" placeholder="Jumlah Anak" value="{{$tunjangan->jumlah_anak}}">
                            {!! $errors->first('jumlah_anak', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                        <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <input type="text" name="besaran_uang" class="form-control" placeholder=" Besaran Uang" value="{{$kategori->besaran_uang}}">
                            {!! $errors->first('besaran_uang', '<p class="help-block">:message</p>') !!}
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