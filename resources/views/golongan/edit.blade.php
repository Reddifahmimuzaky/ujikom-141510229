@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('golongan.update', $cruds->id)}}" method="post">
					<input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<input type="text" name="kode_golongan" class="form-control" placeholder="kode_golongan" value="{{$cruds->kode_golongan}}">
							{!! $errors->first('kode_golongan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('nama_golongan') ? ' has-error' : '' }}">
							<input type="text" name="nama_golongan" class="form-control" placeholder="nama_golongan" value="{{$cruds->nama_golongan}}">
							{!! $errors->first('nama_golongan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
							<input type="text" name="besaran_uang" class="form-control" placeholder="besaran_uang" value="{{$cruds->besaran_uang}}">
							{!! $errors->first('nama_golongan', '<p class="help-block">:message</p>') !!}
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