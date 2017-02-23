@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>CRUD Laravel 5.3</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('penggajian.store')}}" method="post">
                    {{csrf_field()}}
                        
                        <div class="form-group">
                               <input type="text" name="tunjangan_pegawai_id" class="form-control" value="">
                        </div>
                        <div class="form-group">
                               <input type="text" name="jumlah_jam_lembur" class="form-control" value="jumlah_jam_lembur">
                        </div>
                        <div class="form-group">
                            <input type="text" name="jumlah_uang_lembur" class="form-control" value="jumlah_uang_lembur">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tanggal_pengambilan" class="form-control" value="tanggal_pengambilan">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gaji_pokok" class="form-control" value="gaji_pokok">
                        </div>
                        <div class="form-group">
                            <input type="text" name="total_gaji" class="form-control" value="total_gaji">
                        </div>
                        <div class="form-group">
                            <input type="text" name="status_pengambilan" class="form-control" value="status_pengambilan">
                        </div>
                        <div class="form-group">
                            <input type="text" name="petugas_penerima" class="form-control" value="petugas_penerima">
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