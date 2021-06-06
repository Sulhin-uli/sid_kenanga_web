@extends('layout.v_template-admin')
@section('title','Notifikasi')

@section('content')
<form action="/notifikasi/hapusTerpilih" method="POST" enctype="multipart/form-data">
  @csrf
<a href="/home" class="btn btn-success btn-round btn-xs">Kembali</a>
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
                            <th scope="col">Nik</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($notifikasi as $data)
                            <tr>
                                <td>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input task-select" name="checked[]" type="checkbox" id="checked" value="{{ $data->id_notifikasi }}">
                                      <span class="form-check-sign"></span>
                                    </label>
                                  </div>
                                </td>
                                <td>{{$no++}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->aksi}}</td>
                                <td>
                                    <button type="button" class="btn {{ $data->status == 'Dilihat' ? 'btn-primary' : 'btn-success'}} btn-round btn-xs" data-toggle="modal" data-target="#ubah{{ $data->id_notifikasi }}">
                                        {{$data->status == 'Dilihat' ? 'Dilihat' : 'Terkirim'}}
                                    </button>
                                </td>
                                <td><a href="/notifikasi/detail/{{ $data->id_notifikasi }}" class="btn btn-default btn-round btn-xs">Detail</a>
                                    <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data->id_notifikasi }}">
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


@foreach ($notifikasi as $data)

  <!-- Modal Ubah -->
<div class="modal fade" id="ubah{{ $data->id_notifikasi }}" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dilihat?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/notifikasi/ubah_aksi/{{ $data->id_notifikasi}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="status" name="status" value="Dilihat"> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" >Ya</button>
      </div>
    </div>
  </div>
      </form>
</div>
  
<!-- Modal -->
<div class="modal fade" id="hapus{{ $data->id_notifikasi }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
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
          <a href="/notifikasi/hapus/{{ $data->id_notifikasi }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>
  
@endforeach

@endsection