@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('tunjangan.store')}}" method="post">
                    {{csrf_field()}}
                        
                        <div class="form-group{{ $errors->has('kode_tunjangan') ? ' has-error' : '' }}">
                            <input type="text" name="kode_tunjangan" class="form-control" placeholder=" Kode Tunjangan">
                            {!! $errors->first('kode_tunjangan', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                        
                               <select name="jabatan_id" class="form-control">
                                   @foreach($jabatan as $crud)
                                   <option value="{{$crud->id}}">{{$crud->nama_jabatan}}</option>
                                   @endforeach
                               </select>
                            {!! $errors->first('jabatan_id', '<p class="help-block">:message</p>') !!}
                               </div>
                               <div class="form-group">
                               <select name="golongan_id" class="form-control">
                                   @foreach($golongan as $cruds)
                                   <option value="{{$cruds->id}}">{{$cruds->nama_golongan}}</option>
                                   @endforeach
                               </select>
                               </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                        <select name="status" class="form-control">
                        <option  value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                            
                        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                            </div>
                        <div class="form-group{{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
                            <input type="text" name="jumlah_anak" class="form-control" placeholder=" Jumlah Anak">
                            {!! $errors->first('jumlah_anak', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <input type="text" name="besaran_uang" class="form-control" placeholder=" Besaran Uang">
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