@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>CRUD Laravel 5.3</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('lembur.store')}}" method="post">
                    {{csrf_field()}}
                        
                        <div class="form-group">
                        <div class="form-group{{ $errors->has('kode_lembur_id') ? ' has-error' : '' }}">
                               <select name="kode_lembur_id" class="form-control">
                                   @foreach($kategori as $crud)
                                   <option value="{{$crud->id}}">{{$crud->kode_lembur}}</option>
                                   @endforeach
                               </select>
                        {!! $errors->first('kode_lembur_id', '<p class="help-block">:message</p>') !!}
                               </div>
                               <div class="form-group">
                                <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                               <select name="pegawai_id" class="form-control">
                                   @foreach($pegawai as $cruds)
                                   <option value="{{$cruds->id}}">{{$cruds->user->name}}</option>
                                   @endforeach
                               </select>
                               {!! $errors->first('pegawai_id', '<p class="help-block">:message</p>') !!}
                               </div>
                        <div class="form-group">
                        <div class="form-group{{ $errors->has('jumlah_jam') ? ' has-error' : '' }}">
                            <input type="text" name="jumlah_jam" class="form-control" placeholder="jumlah jam">
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