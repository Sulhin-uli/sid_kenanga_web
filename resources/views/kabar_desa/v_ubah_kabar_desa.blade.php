@extends('layout.v_template-admin')
@section('title','Ubah Kabar Desa')

@section('content')




<form action="/kabar_desa/ubah_aksi/{{ $kabar_desa->id_kabar_desa}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Ubah Data Kabar Desa</div>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="gambar">Foto</label><br>
                    <img src="{{ url('img-kabar_desa/' . $kabar_desa->gambar)}}" width="100px">
                </div>	

                <div class="form-group">
                    <label for="gambar">Ubah Gambar Baru</label>
                    <input type="file" class="form-control input-square @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{$kabar_desa->gambar}}">
                    <div class="invalid-feedback">
                        @error('gambar')
                        {{ $message }} 
                        @enderror
                    </div>
                </div>	

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" maxlength="36" class="form-control input-square @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{$kabar_desa->judul}}">
                    <div class="invalid-feedback">
                        @error('judul')
                        {{ $message }} 
                        @enderror
                    </div>
                *maksimal 35 karakter
                </div>	

                <div class="form-group">
                    <label for="tanggal">tanggal</label>
                    <input type="date" class="form-control input-square @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{$kabar_desa->tanggal}}">
                    <div class="invalid-feedback">
                        @error('tanggal')
                        {{ $message }} 
                        @enderror
                    </div>
                </div>		

                <div class="form-group">
                    <label for="isi">isi</label>
                    <textarea class="form-control input-square @error('isi') is-invalid @enderror" id="isi" name="isi" cols="30" rows="10" ><?php echo $kabar_desa->isi ?></textarea>
                    <div class="invalid-feedback">
                        @error('isi')
                        {{ $message }} 
                        @enderror
                    </div>
                *maksimal 255 karakter
                </div>	

            </div>
            <div class="card-action">
                <a href="/kabar_desa" class="btn btn-danger btn-round btn-sm"> Batal</a>
                <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
            </div>
        </div>

    </form>
    </div>
</div>
@endsection