@extends('layouts.admin')
@section('content')
<div class="js">
<div class="banner">
		    	<h1>Tunjangan Pegawai</h1>
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
					<a href="{{route('tunpeg.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Tunjangan</th>
							<th>pegawai</th>
							<th>Pilihan</th>
						</tr>
						<?php $no=1; ?>
						@foreach($tunpeg as $tunpegs)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$tunpegs->tunjangan->kode_tunjangan_id}}</td>
							<td>{{$tunpegs->pegawai->user->name}}</td>
							<td>
								<form method="POST" action="{{ route('tunpeg.destroy', $tunpegs->id) }}" accept-charset="UTF-8">
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