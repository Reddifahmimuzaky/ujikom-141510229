
@extends('layouts.admin')
@section('content')
<div class="js">
<div class="banner">
		    	<h1>Pegawai</h1>
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
					<form action="{{ url('/result')}}" action="GET">
  <div class="form-group">
   <label for="cari">data yang dicari</label>
   <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
  </div>
  <input class="btn btn-primary" type="submit" value="Cari">
 </form>

					<a href="{{route('pegawai.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>nip </th>
							<th>user_id</th>
							<th>jabatan_id </th>
							<th>status</th>
							<th>golongan_id</th>
							<th>photo</th>
							<th>Pilihan</th>
						</tr>
						<?php $no=1; ?>
						@foreach($pegawai as $crud)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$crud->nip}}</td>
							<td>{{$crud->user->name}}</td>
							<td>{{$crud->jabatan->nama_jabatan}}</td>
							<td>{{$crud->user->permission}}</td>
							<td>{{$crud->golongan->nama_golongan}}</td>
							
							<td><div class="gallery-img" >
 	 		<a href="assets/{{$crud->photo}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
				 <img class="img-responsive "  src="assets/{{$crud->photo}}" alt="" / width="90px">   
					<span class="zoom-icon" ></span> </a>
			</a>
			</div>	</td>
							
							<td>
								<form method="POST" action="{{ route('pegawai.destroy', $crud->id) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('pegawai.edit', $crud->id)}}" class="btn btn-primary">Edit</a>
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