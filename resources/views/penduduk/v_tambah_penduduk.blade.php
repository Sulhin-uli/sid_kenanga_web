@extends('layout.v_template-admin')
@section('title','Tambah Data')

@section('content')

<form action="/penduduk/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Data Penduduk</div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="foto_penduduk">Foto</label>
                <input type="file" class="form-control input-square @error('foto_penduduk') is-invalid @enderror" id="foto_penduduk" name="foto_penduduk" value="{{old('foto_penduduk')}}">
                <div class="invalid-feedback">
                    @error('foto_penduduk')
                    {{ $message }} 
                    @enderror
                </div> 
            </div>	            	

            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="number" class="form-control input-square @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{old('nik')}}">
                <div class="invalid-feedback">
                    @error('nik')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	
                        
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control input-square @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
                <div class="invalid-feedback">
                    @error('nama')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	
               
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control input-square @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}" >
                <div class="invalid-feedback">
                    @error('tempat_lahir')
                    {{ $message }} 
                    @enderror
                </div>
            </div>									
        </div>

        <div class="card-action">
            <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
            <a href="/penduduk" class="btn btn-danger btn-round btn-sm"> Batal</a>
        </div>
    </div>

</form>
</div>


@endsection