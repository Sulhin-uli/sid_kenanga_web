@extends('layout.v_template-admin')
@section('title','Visi Misi')

@section('content')
@foreach ($visimisi as $data)
<a href="/visimisi/ubah/{{ $data->id_visimisi }}" class="btn btn-primary btn-round btn-xs">Ubah Visi Dan Misi</a>
                            
{{-- <a href="/visimisi/tambah" class="btn btn-primary btn-round btn-xs">Tambah Data</a> --}}
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
                        <th scope="col">Visi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visimisi as $data)
                        <tr>
                            <td>{{$data->visi}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Misi</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <tr>
                            <td>{{$data->misi}}</td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@foreach ($visimisi as $data)
<!-- Modal -->
<div class="modal fade" id="hapus{{ $data->id_visimisi }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $data->visi }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">    
          Apakah Anda Yakin Ingin Menghapus Data Ini ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/visimisi/hapus/{{ $data->id_visimisi }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>
@endforeach

    
@endsection