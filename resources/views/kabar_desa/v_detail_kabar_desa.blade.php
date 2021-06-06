@extends('layout.v_template-admin')
@section('title','Detail Kabar Desa')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    <h4 class="card-title"><img src="{{ url('img-kabar_desa/' . $kabar_desa->gambar)}}" width="100px"> </h4>
                    <p class="card-category">
                    {{ $kabar_desa->judul}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">Judul</th>
                            <th width="30px">:</th>
                            <th>{{ $kabar_desa->judul}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Tanggal</th>
                            <th width="30px">:</th>
                            <th>{{ $kabar_desa->tanggal}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Isi</th>
                            <th width="30px">:</th>
                            <th><p style="text-align:justify;">{{ $kabar_desa->isi}}</p></th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/kabar_desa" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
