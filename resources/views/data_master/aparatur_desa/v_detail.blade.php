@extends('layout.v_template-admin')
@section('title','Detail Aparatur Desa')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    <h4 class="card-title"><img src="{{ url('img-aparaturdesa/' . $aparaturdesa->foto)}}" width="100px"> </h4>
                    <p class="card-category">
                    {{ $aparaturdesa->nama}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $aparaturdesa->nama}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Jabatan</th>
                            <th width="30px">:</th>
                            <th>{{ $aparaturdesa->jabatan}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/aparaturdesa" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
