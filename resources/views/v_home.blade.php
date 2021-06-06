@extends('layout.v_template-admin')
@section('title','Dashboard')

@section('content')

@if (session('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
    </div>
@endif

<div class="row">
    <div class="col-md-3">
        <div class="card card-stats card-count">
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
                            <table>
                                <tr>
                                    <h4 class="card-title">
                                        <td>Terbaru</td>
                                        <td><span  class="badge badge-danger">{{ $jumlah_notif }}</span></td>
                                    </h4>
                                </tr>
                                <tr>
                                    <h4 class="card-title">
                                        <td>Terkirim</td>
                                        <td><span class="badge badge-success">{{ $notif_terkirim }}</span></td>
                                    </h4>
                                </tr>
                                <tr>
                                    <h4 class="card-title">
                                        <td>Dilihat</td>
                                        <td><span class="badge badge-primary">{{ $notif_dilihat }}</span></td>
                                    </h4>
                                </tr>
                            </table>
                            <br>
                            <a href="/home">
								<i class="la la-refresh"></i>
							</a>
                            <a href="/notifikasi/hapus_notif">
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
                            <i class="la la-envelope-o"></i>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Pengaduan</p>
                            <h4 class="card-title">{{ $pengaduan }}</h4>
                            <br>
                            <br>
                            <br>
                            <a href="/pengaduan">
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
                            <i class="la la-file-text-o"></i>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Permintaan Surat</p>
                            <h4 class="card-title">{{ $pmntsurat }}</h4>
                            <br>
                            <br>
                            <br>
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
                            <i class="la la-newspaper-o"></i>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Kabar Desa</p>
                            <h4 class="card-title">{{ $kbrdesa }}</h4>
                            <br>
                            <br>
                            <br>
                            <a href="/kabar_desa">
                                <p style="color: black; float: right;" >Lihat</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>    

@endsection