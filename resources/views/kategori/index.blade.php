@extends('layouts.admin')
@section('content')
<div class="js">
<div class="banner">
		    	<h1>Kategori</h1>
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
					<a href="{{route('kategori.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Kode Kategori Lembur</th>
							<th>Jabatan</th>
							<th>Golongan</th>
							<th>Besaran Uang</th>
							<th>Pilihan</th>
						</tr>
						<?php $no=1; ?>
						@foreach($kategori as $kategoris)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$kategoris->kode_lembur}}</td>
							<td>{{$kategoris->jabatan->nama_jabatan}}</td>
							<td>{{$kategoris->golongan->nama_golongan}}</td>
							<td>{{$kategoris->besaran_uang}}</td>
							<td>
								<form method="POST" action="{{ route('kategori.destroy', $kategoris->id) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('kategori.edit', $kategoris->id)}}" class="btn btn-primary">Edit</a>
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