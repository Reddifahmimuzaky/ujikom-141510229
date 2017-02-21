@extends('layouts.admin')
@section('content')
<div class="js">
<div class="banner">
		    	<h1>Lembur Pegawai</h1>
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
					<a href="{{route('lembur.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th> Kategori Lembur</th>
							<th>pegawai</th>
							<th>jam lembur</th>
							<th>Pilihan</th>
						</tr>
						<?php $no=1; ?>
						@foreach($lembur as $lemburs)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$lemburs->kategori->kode_lembur}}</td>
							<td>{{$lemburs->pegawai->user->name}}</td>	
							<td>{{$lemburs->jumlah_jam}}</td>
							<td>
								<form method="POST" action="{{ route('lembur.destroy', $lemburs->id) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            
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