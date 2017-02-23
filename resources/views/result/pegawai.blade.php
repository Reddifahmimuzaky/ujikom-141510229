@extends('layouts.app')

@section('content')
<div class="container">
 <h3>Hasil Pencarian</h3>
 <hr>
      

       

<table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>No</th>
         <th><center>Pegawai</center></th>
         <th colspan="5"><center>Pilihan</center></th>
     </tr>
     </thead>
     <tbody>
       <?php $no=1 ?>
     @if (count($name) > 0)
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
      </div>  </td>
              
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
     </tbody>

 </table>
 <thead>
   @else
       <div class="jumbotron">
         <h2>OOPS!!!! Data Yang Anda Cari Tidak DiTemukan</h2>
         <p>
           karena data yang anda cari tidak ditemukan 
           silahkan masukan kembali keyword lain 
           <td><a href="/guru" class="btn btn-primary">Kembali</a>
         </p>
       </div>

        @endif

 </thead>
 </div>
 @endsection
