@extends('layout.v_template-admin')
@section('title','Penduduk')

@section('content')
<a href="/penduduk/tambah" class="btn btn-primary btn-round btn-xs">Tambah Data</a>
{{-- <a href="/penduduk/print" target="_blank" class="btn btn-warning btn-round btn-xs">Print PDF</a> --}}
<br><br>

@if (session('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
    </div>
@endif

<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Foto</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($penduduk as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td><img src="{{ url('img-profil/' . $data->foto_penduduk)}}" width="50px"></td>
                            <td>{{$data->nik}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->tempat_lahir}}</td>
                            <td>
                                <a href="/penduduk/detail/{{ $data->id_penduduk }}" class="btn btn-success btn-round btn-xs">Detail</a>
                                <a href="/penduduk/ubah/{{ $data->id_penduduk }}" class="btn btn-warning btn-round btn-xs">Ubah</a>
                                <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data->id_penduduk }}">
                                    Hapus
                                  </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@foreach ($penduduk as $data)
<!-- Modal -->
<div class="modal fade" id="hapus{{ $data->id_penduduk }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin Ingin Menghapus Data Ini ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/penduduk/hapus/{{ $data->id_penduduk }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>
@endforeach


@endsection