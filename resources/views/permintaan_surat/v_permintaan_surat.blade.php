@extends('layout.v_template-admin')
@section('title','Permintaan Surat')

@section('content')
<form action="/permintaan_surat/hapusTerpilih" method="POST" enctype="multipart/form-data">
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
                        <th scope="col">Nama Surat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($permintaan_surat as $data)
                        <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input task-select" name="checked[]" type="checkbox" id="checked" value="{{ $data->id_permintaan_surat }}">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td>{{$no++}}</td>
                            <td>{{$data->nik}}</td>
                            <td>{{$data->nama_surat}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                                <a href="/permintaan_surat/detail/{{ $data->id_permintaan_surat }}" class="btn btn-success btn-round btn-xs">Detail</a>
                                {{-- <a href="/permintaan_surat/ubah/{{ $data->id_permintaan_surat }}" class="btn btn-warning btn-round btn-xs">Ubah</a> --}}
                                <button type="button" class="btn btn-warning btn-round btn-xs" data-toggle="modal" data-target="#ubah{{ $data->id_permintaan_surat }}">
                                    Ubah status
                                </button>
                                <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data->id_permintaan_surat }}">
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

@foreach ($permintaan_surat as $data)
<!-- Modal Hapus -->
<div class="modal fade" id="hapus{{ $data->id_permintaan_surat }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama_penduduk }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin Menghapus Data Ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="/permintaan_surat/hapus/{{ $data->id_permintaan_surat }}" class="btn btn-primary">Ya</a>
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

<div class="modal fade" id="ubah{{ $data->id_permintaan_surat }}" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Status Permintaan Surat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/permintaan_surat/ubah_aksi/{{ $data->id_permintaan_surat}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{-- <input type="hidden" id="status" name="status" value="Dilihat">  --}}
          <div class="form-check">
            <table>
              <tr>
                <td>
                  <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" id="status" name="status" value="Terkirim"  checked="">
                    <span class="form-radio-sign">Terkirim</span>
                  </label>
                </td>
                <td>
                  <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" id="status" name="status" value="Diproses" >
                    <span class="form-radio-sign">Dirposes</span>
                  </label>
                </td>
                <td>
                  <label class="form-radio-label ml-3">
                    <input class="form-radio-input" type="radio" id="status" name="status" value="Selesai">
                    <span class="form-radio-sign">Selesai</span>
                  </label>
                </td>
                <td>
                  <label class="form-radio-label ml-3">
                    <input class="form-radio-input" type="radio" id="status" name="status" value="Dibatalkan">
                    <span class="form-radio-sign">Dibatalkan</span>
                  </label>
                </td>
              {{-- </tr>
              <tr> --}}
              </tr>
              <tr>
                
              </tr>
              <tr>
                
              </tr>
            </table>
          </div>
      <div class="modal-footer">
        {{-- <a href="/pengaduan/detail/{{ $data->id_permintaan_surat }}" type="submit" class="btn btn-primary">Ya</a> --}}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" >Ya</button>
      </div>
    </div>
  </div>
</form>
</div>
@endforeach

@endsection