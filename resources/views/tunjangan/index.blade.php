@extends('layouts.admin')
@section('content')
<div class="js">
<div class="banner">
		    	<h1>Tunjangan</h1>
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
					<a href="{{route('tunjangan.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Kode Tunjangan</th>
							<th>Jabatan</th>
							<th>Golongan</th>
							<th>status</th>
							<th>jumlah anak</th>
							<th>Besaran Uang</th>
							<th>Pilihan</th>
						</tr>
						<?php $no=1; ?>
						@foreach($tunjangan as $tunjangans)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$tunjangans->kode_tunjangan}}</td>
							<td>{{$tunjangans->jabatan->nama_jabatan}}</td>	
							<td>{{$tunjangans->golongan->nama_golongan}}</td>
							<td>{{$tunjangans->status}}</td>
							<td>{{$tunjangans->jumlah_anak}}</td>
							<td>{{$tunjangans->besaran_uang}}</td>
							<td>
								<form method="POST" action="{{ route('tunjangan.destroy', $tunjangans->id) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('tunjangan.edit', $tunjangans->id)}}" class="btn btn-primary">Edit</a>
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