@extends('layout.v_template-admin')
@section('title','Ubah Agenda Kegiatan')

@section('content')




<form action="/agendakegiatan/ubah_aksi/{{ $agendakegiatan->id_agendakegiatan}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Data Agenda Kegiatan</div>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="foto">Foto</label><br>
                <img src="{{ url('img-agendakegiatan/' . $agendakegiatan->foto)}}" width="100px">
            </div>	

            <div class="form-group">
                <label for="foto">Ubah Foto Baru</label>
                <input type="file" class="form-control input-square @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{$agendakegiatan->foto}}">
                <div class="invalid-feedback">
                    @error('foto')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control input-square @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{$agendakegiatan->judul}}">
                <div class="invalid-feedback">
                    @error('judul')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control input-square @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{$agendakegiatan->keterangan}}">
                <div class="invalid-feedback">
                    @error('keterangan')
                    {{ $message }} 
                    @enderror
                </div>
            </div>		

        </div>
        <div class="card-action">
            <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
            <a href="/agendakegiatan" class="btn btn-danger btn-round btn-sm"> Batal</a>
        </div>
    </div>

</form>
</div>


@endsection