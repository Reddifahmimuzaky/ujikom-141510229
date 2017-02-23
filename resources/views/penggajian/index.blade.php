
@extends('layouts.admin')
@section('content')
<div class="js">
<div class="banner">
		    	<h1>penggajian</h1>
		    </div>
		    <div id="preloader"></div>
<div class="container">

	<div class="row">
		<div class="col-md-13">
			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
				            {{ Session::get('alert-success') }}@
				        </div>
					@endif
					<a href="{{route('penggajian.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>tunjangan_pegawai_id </th>
							<th>status_pengambilan</th>
							<th>petugas_penerima</th>
							<th>Pilihan</th>
						</tr>
						<?php $no=1; ?>
						@foreach($penggajian as $crud)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$crud->tunjangan_pegawai_id}}</td>
							<td>{{$crud->status_pengambilan}}</td>
							<td>{{$crud->petugas_penerima}}</td>
							<td>
								<form method="POST" action="{{ route('penggajian.destroy', $crud->id) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('penggajian.show', $crud->id)}}" class="btn btn-primary">Edit</a>
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