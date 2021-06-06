@extends('layout.v_template-admin')
@section('title','Dashboard')

@section('content')
{{-- <a href="/kabar_desa/tambah" class="btn btn-primary btn-round btn-xs">Tambah Data</a> --}}
{{-- <a href="/kabar_desa/print" target="_blank" class="btn btn-warning btn-round btn-xs">Print PDF</a> --}}
<br><br>

{{-- @if (session('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
    </div>
@endif --}}

<div class="row">
    <div class="col-md-3">
        <div class="card card-stats card-warning">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="la la-bell"></i>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Notifikasi</p>
                            <h4 class="card-title">{{ $notif }}</h4>
                            <a href="/">
                               <p style="color: black; float: right;" >Lihat</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats card-success">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="la la-bar-chart"></i>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Akun Penduduk</p>
                            <h4 class="card-title">{{ $akunpenduduk }}</h4>
                            <a href="/akun">
                                <p style="color: black; float: right;" >Lihat</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats card-danger">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="la la-newspaper-o"></i>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Permintaan Surat</p>
                            <h4 class="card-title">{{ $pmntsurat }}</h4>
                            <a href="/permintaan_surat">
                                <p style="color: black; float: right;" >Lihat</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats card-primary">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="la la-check-circle"></i>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Kabar Desa</p>
                            <h4 class="card-title">{{ $kbrdesa }}</h4>
                            <a href="/kabar_desa">
                                <p style="color: black; float: right;" >Lihat</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection