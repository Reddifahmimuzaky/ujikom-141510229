@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="panel panel-default">
			<div class="panel-heading">Registrasi Pegawai</div>
				<div class="panel-body">
					<form action="{{route('pegawai.update', $pegawai->id)}}" method="post" enctype= "multipart/form-data">
					{{csrf_field()}}
						<div class="form-group">
							<input type="text" name="nip" class="form-control" placeholder="nip ">
						</div>
						       <div class="form-group">
						       <select name="jabatan_id" class="form-control">
                                   @foreach($jabatan as $crud)
                                   <option value="{{$crud->id}}">{{$crud->nama_jabatan}}</option>
                                   @endforeach
                               </select>
                        
							   </div>
						<div class="form-group">
							<select name="golongan_id" class="form-control">
                                   @foreach($golongan as $crud)
                                   <option value="{{$crud->id}}">{{$crud->nama_golongan}}</option>
                                   @endforeach
                               </select>
						</div>
						<div class="form-group">
							<input type="text" name="besaran_uang" class="form-control" placeholder="Besaran Uang ">
						</div>
                        
                        <div class="form-group">
                         <input type="file" id="photo" name="photo" class="form-control">
                        </div>
						
					
				</div>
			</div>
		</div>
		<div class="col-md-5 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register User</div>
                <div class="panel-body">
                    

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="permission" class="form-control" placeholder="permission">
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection