@extends('layout.v_template-admin')
@section('title','Detail Pengaduan')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                
                    <p class="card-category">
                    {{ $pengaduan->nik}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">NIK</th>
                            <th width="30px">:</th>
                            <th>{{ $pengaduan->nik}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $pengaduan->nama}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Alamat</th>
                            <th width="30px">:</th>
                            <th>{{ $pengaduan->alamat}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Waktu</th>
                            <th width="30px">:</th>
                            <th>{{ $pengaduan->created_at}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Isi</th>
                            <th width="30px">:</th>
                            <th>{{ $pengaduan->isi}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/pengaduan" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
