@extends('layout.v_template-admin')
@section('title','Detail Akun')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    {{-- <h4 class="card-title"><img src="{{ url('img-kabar_desa/' . $kabar_desa->gambar)}}" width="100px"> </h4> --}}
                    <p class="card-category">
                    {{ $akun->name}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">Nik</th>
                            <th width="30px">:</th>
                            <th>{{ $akun->nik}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $akun->name}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Alamat</th>
                            <th width="30px">:</th>
                            <th>{{ $akun->alamat}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Telepon</th>
                            <th width="30px">:</th>
                            <th>{{ $akun->no_hp}}</th>
                        </tr>
                        {{-- <tr>
                            <th width="100px"></th>
                            <th width="30px">:</th>
                            <th>{{ $akun->}}</th>
                        </tr> --}}
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/akun" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
