@extends('layouts.admin')
@section('content')
<div class="js">
<div class="banner">
		    	<h1>Golongan</h1>
		    </div>
		    <div id="preloader"></div>
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
				            {{ Session::get('alert-success') }}
				        </div>
					@endif
					<a href="{{route('golongan.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Kode Golongan</th>
							<th>Nama Golongan</th>
							<th>Besaran Uang</th>
							<th>Pilihan</th>
						</tr>
						<?php $no=1; ?>
						@foreach($cruds as $crud)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$crud->kode_golongan}}</td>
							<td>{{$crud->nama_golongan}}</td>
							<td>{{$crud->besaran_uang}}</td>
							<td>
								<form method="POST" action="{{ route('golongan.destroy', $crud->id) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('golongan.edit', $crud->id)}}" class="btn btn-primary">Edit</a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection