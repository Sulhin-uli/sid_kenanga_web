@extends('layout.v_template-admin')
@section('title','Detail Notifikasi')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    <p class="card-category">
                    {{ $notifikasi->nik}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">NIK</th>
                            <th width="30px">:</th>
                            <th>{{ $notifikasi->nik}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $notifikasi->nama}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Aksi</th>
                            <th width="30px">:</th>
                            <th><p style="text-align:justify;">{{ $notifikasi->aksi}}</p></th>
                        </tr>
                        <tr>
                            <th width="100px">Status</th>
                            <th width="30px">:</th>
                            <th>{{ $notifikasi->status}}</th>
                        </tr>
                        <tr>
                            <th width="100px">{{ ($notifikasi->alasan == null) ? "" :  "Alasan"}}</th>
                            <th width="30px">{{ ($notifikasi->alasan == null) ? "" :  ":"}}</th>
                            <th>{{ ($notifikasi->alasan == null) ? "" :  $notifikasi->alasan}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        <th><a href="/notifikasi" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
