@extends('layout.v_template-admin')
@section('title','Detail Agenda Kegiatan')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    <h4 class="card-title"><img src="{{ url('img-agendakegiatan/' . $agendakegiatan->foto)}}" width="100px"> </h4>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">Judul</th>
                            <th width="30px">:</th>
                            <th>{{ $agendakegiatan->judul}}</th>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <th width="100px">Keterangan</th>
                            <th width="30px">:</th>
                            <th>{{ $agendakegiatan->keterangan}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/agendakegiatan" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
