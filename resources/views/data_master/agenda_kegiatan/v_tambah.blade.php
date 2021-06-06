@extends('layout.v_template-admin')
@section('title','Tambah Data')

@section('content')

<form action="/agendakegiatan/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf
 
<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Agenda Kegiatan</div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control input-square @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{old('foto')}}">
                <div class="invalid-feedback">
                    @error('foto')
                    {{ $message }} 
                    @enderror
                </div> 
            </div>	            	

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control input-square @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul')}}">
                <div class="invalid-feedback">
                    @error('judul')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	
                        
            <div class="form-group">
                <label for="keterangan">keterangan</label>
                <textarea cols="30" rows="10" class="form-control input-square @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{old('keterangan')}}"></textarea>
                {{-- <input type="text" class="form-control input-square @error('keterangan') is-invalid @enderror" id="isi" name="isi" value="{{old('isi')}}" > --}}
                <div class="invalid-feedback">
                    @error('keterangan')
                    {{ $message }} 
                    @enderror
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