@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('golongan.store')}}" method="post">
					{{csrf_field()}}
						<div class="form-group">
							<div class="form-group{{ $errors->has('kode_golongan') ? ' has-error' : '' }}">
							<input type="text" name="kode_golongan" class="form-control" placeholder="kode_golongan">
							{!! $errors->first('kode_golongan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('nama_golongan') ? ' has-error' : '' }}">
							<input type="text" name="nama_golongan" class="form-control" placeholder=" nama_golongan">
							{!! $errors->first('nama_golongan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
							<input type="text" name="besaran_uang" class="form-control" placeholder=" besaran_uang">
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