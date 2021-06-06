@extends('layout.v_template-admin')
@section('title','Detail Visi Misi')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">  
                    <table>
                        <tr>
                            <th width="100px">Visi</th>
                            <th width="30px">:</th>
                            <th>{{ $visimisi->visi}}</th>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <th width="100px">Misi</th>
                            <th width="30px">:</th>
                            <th>{{ $visimisi->misi}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/visimisi" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
