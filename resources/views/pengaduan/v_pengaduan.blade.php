@extends('layout.v_template-admin')
@section('title','Pengaduan')

@section('content')
<form action="/pengaduan/hapusTerpilih" method="POST" enctype="multipart/form-data">
  @csrf
  <a href="#" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapusTerpilih">Hapus Data Terpilih</a>
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
                <table class="table table-hover data">
                    <thead>
                        <tr>
                          <th>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input select-all-checkbox" id="checkAll" type="checkbox">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </th>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Status</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($pengaduan as $data)
                            <tr>
                                <td>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input task-select" name="checked[]" type="checkbox" id="checked" value="{{ $data->id_pengaduan }}">
                                      <span class="form-check-sign"></span>
                                    </label>
                                  </div>
                                </td>
                                <td>{{$no++}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                  <button type="button" class="btn {{ $data->status == 'Dilihat' ? 'btn-primary' : 'btn-success'}} btn-round btn-xs" data-toggle="modal" data-target="#ubah{{ $data->id_pengaduan }}">
                                      {{$data->status == 'Dilihat' ? 'Dilihat' : 'Terkirim'}}
                                  </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-round btn-xs" data-toggle="modal" data-target="#ubah{{ $data->id_pengaduan }}">
                                        Lihat
                                    </button>
                                    {{-- <a href="/pengaduan/detail/{{ $data->id_pengaduan }}" class="btn btn-success btn-round btn-xs">Baca</a> --}}
                                    <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data->id_pengaduan }}">
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
    
@foreach ($pengaduan as $data)
<!-- Modal Hapus -->
<div class="modal fade" id="hapus{{ $data->id_pengaduan }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
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
          <a href="/pengaduan/hapus/{{ $data->id_pengaduan }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Hapus terpilih -->
<div class="modal fade" id="hapusTerpilih" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin Menghapus Data Ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Ya</button>
      </div>
    </div>
  </div>
</div>
</form>


   <!-- Modal Ubah -->
<div class="modal fade" id="ubah{{ $data->id_pengaduan }}" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dilihat?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/pengaduan/ubah_aksi/{{ $data->id_pengaduan}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="status" name="status" value="Dilihat"> 
      <div class="modal-footer">
        {{-- <a href="/pengaduan/detail/{{ $data->id_pengaduan }}" type="submit" class="btn btn-primary">Ya</a> --}}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" >Ya</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endforeach


@endsection