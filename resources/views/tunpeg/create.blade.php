@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('tunpeg.store')}}" method="post">
                    {{csrf_field()}}
                        
                        <div class="form-group">
                               <select name="kode_tunjangan_id" class="form-control">
                                   @foreach($tunjangan as $tunjangans)
                                   <option value="{{$tunjangans->id}}">{{$tunjangans->tunpeg->kode_tunjangan_id}}</option>
                                   @endforeach
                               </select>
                        
                               </div>
                               <div class="form-group">
                               <select name="pegawai_id" class="form-control">
                                   @foreach($pegawai as $cruds)
                                   <option value="{{$cruds->id}}">{{$cruds->user->name}}</option>
                                   @endforeach
                               </select>
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