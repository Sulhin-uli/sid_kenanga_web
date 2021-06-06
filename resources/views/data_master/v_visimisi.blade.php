@extends('layout.v_template-admin')
@section('title','Kabar Desa')

@section('content')
<a href="/data_master/tambah" class="btn btn-primary btn-round btn-xs">Tambah Data</a>
{{-- <a href="/kabar_desa/print" target="_blank" class="btn btn-warning btn-round btn-xs">Print PDF</a> --}}
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
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($kabar_desa as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->visi}}</td>
                            <td>{{$data->misi}}</td>
                            <td>
                                <a href="/data_master/detail/{{ $data->id_kabar_desa }}" class="btn btn-success btn-round btn-xs">Detail</a>
                                <a href="/data_master/ubah/{{ $data->id_kabar_desa }}" class="btn btn-warning btn-round btn-xs">Ubah</a>
                                <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data-> }}">
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

@foreach ($kabar_desa as $data)
<!-- Modal -->
<div class="modal fade" id="hapus{{ $data->id_kabar_desa }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $data->judul }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin Ingin Menghapus Data Ini ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/kabar_desa/hapus/{{ $data->id_kabar_desa }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>
@endforeach

    
@endsection