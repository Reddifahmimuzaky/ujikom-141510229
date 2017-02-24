@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('jabatan.store')}}" method="post">
					{{csrf_field()}}
						<div class="form-group">
							<div class="form-group{{ $errors->has('tunjangan_pegawai_id') ? ' has-error' : '' }}">
							<select name="tunjangan_pegawai_id" class="form-control">
                                   @foreach($tunpeg as $crud)
                                   <option value="{{$crud->id}}">{{$crud->pegawai->user->name}}</option>
                                   @endforeach
                               </select>
                               {!! $errors->first('tunjangan_pegawai_id', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('jumlah_jam_lembur') ? ' has-error' : '' }}">
							<input type="text" name="jumlah_jam_lembur" class="form-control" placeholder=" jam lembur">
							{!! $errors->first('jumlah_jam_lembur', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('jumlah_uang_lembur') ? ' has-error' : '' }}">
							<input type="text" name="jumlah_uang_lembur" class="form-control" placeholder=" jumlah uang">
							{!! $errors->first('jumlah_uang', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('tanggal_pengambilan') ? ' has-error' : '' }}">
							<input type="date" name="tanggal_pengambilan" class="form-control" placeholder=" tanggal_pengambilan">
							{!! $errors->first('tanggal_pengambilan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
							<input type="text" name="gaji_pokok" class="form-control" placeholder=" gaji pokok">
							{!! $errors->first('gaji pokok', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('total_gaji') ? ' has-error' : '' }}">
							<input type="text" name="total_gaji" class="form-control" placeholder=" total gaji">
							{!! $errors->first('total_gaji', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('status_pengambilan') ? ' has-error' : '' }}">
							<input type="text" name="status_pengambilan" class="form-control" placeholder=" total gaji">
							{!! $errors->first('status_pengambilan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<div class="form-group{{ $errors->has('petugas_penerima') ? ' has-error' : '' }}">
							<input type="text" name="petugas_penerima" class="form-control" placeholder=" total gaji">
							{!! $errors->first('petugas_penerima', '<p class="help-block">:message</p>') !!}
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