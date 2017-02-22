@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('jabatan.update', $jabatan->id)}}" method="post">
					<input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('kode_jabatan') ? ' has-error' : '' }}">
							<input type="text" name="kode_jabatan" class="form-control" placeholder="kode jabatan" value="{{$jabatan->kode_jabatan}}">
							{!! $errors->first('kode_jabatan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
							<input type="text" name="nama_jabatan" class="form-control" placeholder="nama jabatan" value="{{$jabatan->nama_jabatan}}">
							{!! $errors->first('nama_jabatan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
							<input type="text" name="besaran_uang" class="form-control" placeholder="besaran uang" value="{{$jabatan->besaran_uang}}">
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