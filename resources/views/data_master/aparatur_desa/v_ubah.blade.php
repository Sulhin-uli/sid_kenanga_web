@extends('layout.v_template-admin')
@section('title','Ubah Aparatur Desa')

@section('content')




<form action="/aparaturdesa/ubah_aksi/{{ $aparaturdesa->id_aparaturdesa}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Data Aparatur Desa</div>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="foto">Foto</label><br>
                <img src="{{ url('img-aparaturdesa/' . $aparaturdesa->foto)}}" width="100px">
            </div>	

            <div class="form-group">
                <label for="foto">Ubah Foto Baru</label>
                <input type="file" class="form-control input-square @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{$aparaturdesa->foto}}">
                <div class="invalid-feedback">
                    @error('foto')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control input-square @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$aparaturdesa->nama}}">
                <div class="invalid-feedback">
                    @error('nama')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control input-square @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{$aparaturdesa->jabatan}}">
                <div class="invalid-feedback">
                    @error('jabatan')
                    {{ $message }} 
                    @enderror
                </div>
            </div>		

        </div>
        <div class="card-action">
            <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
            <a href="/aparaturdesa" class="btn btn-danger btn-round btn-sm"> Batal</a>
        </div>
    </div>

</form>
</div>


@endsection