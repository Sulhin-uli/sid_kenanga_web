@extends('layout.v_template-admin')
@section('title','Akun')

@section('content')
<form action="/akun/hapusTerpilih" method="POST" enctype="multipart/form-data">
  @csrf
  <a href="/akun/tambah" class="btn btn-primary btn-round btn-xs">Tambah Data</a>
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
                          <th scope="col">Nama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Telepon</th>
                          <th scope="col">Opsi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no=1; ?>
                      @foreach ($akun as $data)
                          <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input task-select" name="checked[]" type="checkbox" id="checked" value="{{ $data->id }}">
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td>{{$no++}}</td>
                              <td>{{$data->nik}}</td>
                              <td>{{$data->name}}</td>
                              <td>{{$data->alamat}}</td>
                              <td>{{$data->no_hp}}</td>
                              <td>
                                  <a href="/akun/detail/{{ $data->id }}" class="btn btn-success btn-round btn-xs">Detail</a>
                                  <a href="/akun/ubah/{{ $data->id }}" class="btn btn-warning btn-round btn-xs">Ubah</a>
                                      <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data->id }}">
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

@foreach ($akun as $data)
<!-- Modal -->
<div class="modal fade" id="hapus{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $data->nik }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin Ingin Menghapus Data Ini ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/akun/hapus/{{ $data->id }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>
@endforeach


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
@endsection