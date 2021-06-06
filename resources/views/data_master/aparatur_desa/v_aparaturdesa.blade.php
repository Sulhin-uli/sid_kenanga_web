@extends('layout.v_template-admin')
@section('title','Aparatur Desa')

@section('content')
<form action="/aparaturdesa/hapusTerpilih" method="POST" enctype="multipart/form-data">
  @csrf
  <a href="/aparaturdesa/tambah" class="btn btn-primary btn-round btn-xs">Tambah Data</a>
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
                              <input class="form-check-input  select-all-checkbox" id="checkAll" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </th>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($aparaturdesa as $data)
                        <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input task-select" name="checked[]" type="checkbox" id="checked" value="{{ $data->id_aparaturdesa }}">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td>{{$no++}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jabatan}}</td>
                            <td><img src="{{ url('img-aparaturdesa/' . $data->foto)}}" width="50px"></td>
                            <td>
                                <a href="/aparaturdesa/detail/{{ $data->id_aparaturdesa }}" class="btn btn-success btn-round btn-xs">Detail</a>
                                <a href="/aparaturdesa/ubah/{{ $data->id_aparaturdesa }}" class="btn btn-warning btn-round btn-xs">Ubah</a>
                                <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data->id_aparaturdesa }}">
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

@foreach ($aparaturdesa as $data)
<!-- Modal -->
<div class="modal fade" id="hapus{{ $data->id_aparaturdesa }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
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
          <a href="/aparaturdesa/hapus/{{ $data->id_aparaturdesa }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>
@endforeach

<!-- Modal Hapus -->
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