@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('tunjangan.store')}}" method="post">
                    {{csrf_field()}}
                        
                        <div class="form-group">
                            <input type="text" name="kode_tunjangan" class="form-control" placeholder=" Kode Tunjangan">
                        </div>
                        <div class="form-group">
                               <select name="jabatan_id" class="form-control">
                                   @foreach($jabatan as $crud)
                                   <option value="{{$crud->id}}">{{$crud->nama_jabatan}}</option>
                                   @endforeach
                               </select>
                        
                               </div>
                               <div class="form-group">
                               <select name="golongan_id" class="form-control">
                                   @foreach($golongan as $cruds)
                                   <option value="{{$cruds->id}}">{{$cruds->nama_golongan}}</option>
                                   @endforeach
                               </select>
                               </div>
                        <div class="form-group">
                            <input type="text" name="status" class="form-control" placeholder=" status">
                        <div class="form-group">
                            <input type="text" name="jumlah_anak" class="form-control" placeholder=" Jumlah Anak">
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="besaran_uang" class="form-control" placeholder=" Besaran Uang">
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