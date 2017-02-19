@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h3>Tambah Data</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('kategori.store')}}" method="post">
					{{csrf_field()}}
						<div class="form-group">
							<div class="form-group{{ $errors->has('kode_lembur') ? ' has-error' : '' }}">
							<input type="text" name="kode_lembur" class="form-control" placeholder="kode Jabatan">
							{!! $errors->first('kode_lembur', '<p class="help-block">:message</p>') !!}
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