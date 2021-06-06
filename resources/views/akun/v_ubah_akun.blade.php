@extends('layout.v_template-admin')
@section('title','Ubah Akun')

@section('content')




<form action="/akun/ubah_aksi/{{ $akun->id}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Ubah Data Akun</div>
            </div>
            <div class="card-body">

                {{-- <div class="form-group">
                    <label for="gambar">Foto</label><br>
                    <img src="{{ url('img-akun/' . $akun->gambar)}}" width="100px">
                </div>	

                <div class="form-group">
                    <label for="gambar">Ubah Gambar Baru</label>
                    <input type="file" class="form-control input-square @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{$akun->gambar}}">
                    <div class="invalid-feedback">
                        @error('gambar')
                        {{ $message }} 
                        @enderror
                    </div>
                </div>	 --}}

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" maxlength="100" class="form-control input-square @error('name') is-invalid @enderror" id="name" name="name" value="{{$akun->name}}">
                    <div class="invalid-feedback">
                        @error('name')
                        {{ $message }} 
                        @enderror
                    </div>
                    *maksimal 100 karakter
                </div>	

                <div class="form-group">
                    <label for="nik">nik</label>
                    <input type="number" minlength="10" class="form-control input-square @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{$akun->nik}}">
                    <div class="invalid-feedback">
                        @error('nik')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 10 karakter
                </div>		

                <div class="form-group">
                    <label for="pin">pin</label>
                    <input type="number"  minlength="6" class="form-control input-square @error('pin') is-invalid @enderror" id="pin" name="pin" value="{{$akun->pin}}">
                    <div class="invalid-feedback">
                        @error('pin')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 6 karakter
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" maxlength="255" class="form-control input-square @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{$akun->alamat}}">
                    <div class="invalid-feedback">
                        @error('alamat')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 6 karakter
                </div>

                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="number" minlength="10" class="form-control input-square @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{$akun->no_hp}}">
                    <div class="invalid-feedback">
                        @error('no_hp')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 10 karakter
                </div>

            </div>
            <div class="card-action">
                <a href="/akun" class="btn btn-danger btn-round btn-sm"> Batal</a>
                <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
            </div>
        </div>

    </form>
    </div>
</div>

@endsection