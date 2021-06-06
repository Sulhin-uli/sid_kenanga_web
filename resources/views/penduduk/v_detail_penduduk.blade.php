@extends('layout.v_template-admin')
@section('title','Detail Penduduk')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    <h4 class="card-title"><img src="{{ url('img-profil/' . $penduduk->foto_penduduk)}}" width="100px"> </h4>
                    <p class="card-category">
                    {{ $penduduk->nama}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">NIK</th>
                            <th width="30px">:</th>
                            <th>{{ $penduduk->nik}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $penduduk->nama}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Tempat lahir</th>
                            <th width="30px">:</th>
                            <th>{{ $penduduk->tempat_lahir}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/penduduk" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
