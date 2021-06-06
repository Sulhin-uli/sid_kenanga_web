@extends('layout.v_template-admin')
@section('title','Detail Permintaan Surat')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    <p class="card-category">
                    {{ $permintaan_surat->nama_penduduk}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $permintaan_surat->nama_penduduk}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Nama Surat</th>
                            <th width="30px">:</th>
                            <th>{{ $permintaan_surat->nama_surat}}</th>
                        </tr>
                        <tr>
                            <th width="100px">status</th>
                            <th width="30px">:</th>
                            <th>{{ $permintaan_surat->status}}</th>
                        </tr> 
                        <tr>
                            <th width="100px">Tanggal</th>
                            <th width="30px">:</th>
                            <th>{{ $permintaan_surat->tgl}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>------------------------------</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>Form Data Permintaan Surat</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text1 == null) ? "" :  $permintaan_surat->text1}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text2 == null) ? "" :  $permintaan_surat->text2}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text3 == null) ? "" :  $permintaan_surat->text3}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text4 == null) ? "" :  $permintaan_surat->text4}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text5 == null) ? "" :  $permintaan_surat->text5}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text6 == null) ? "" :  $permintaan_surat->text6}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text7 == null) ? "" :  $permintaan_surat->text7}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text8 == null) ? "" :  $permintaan_surat->text8}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text9 == null) ? "" :  $permintaan_surat->text9}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text10 == null) ? "" :  $permintaan_surat->text10}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text11 == null) ? "" :  $permintaan_surat->text11}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text12 == null) ? "" :  $permintaan_surat->text12}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text13 == null) ? "" :  $permintaan_surat->text13}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text14 == null) ? "" :  $permintaan_surat->text14}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text15 == null) ? "" :  $permintaan_surat->text15}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text16 == null) ? "" :  $permintaan_surat->text16}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text17 == null) ? "" :  $permintaan_surat->text17}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text18 == null) ? "" :  $permintaan_surat->text18}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text19 == null) ? "" :  $permintaan_surat->text19}}</th>
                        </tr>
                        <tr>
                            <th width="100px"></th>
                            <th width="30px"></th>
                            <th>{{ ($permintaan_surat->text20 == null) ? "" :  $permintaan_surat->text20}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                            <th><a href="/permintaan_surat" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                            <th><a href="/surat" target="_blank" class="btn btn-primary btn-round btn-xs">Buat Surat</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
