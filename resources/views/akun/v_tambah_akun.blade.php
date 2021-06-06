@extends('layout.v_template-admin')
@section('title','Tambah Data')

@section('content')

<form action="/akun/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf
 
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tambah Akun</div>
            </div>

            <div class="card-body">
                {{-- <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control input-square @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{old('gambar')}}">
                    <div class="invalid-feedback">
                        @error('gambar')
                        {{ $message }} 
                        @enderror
                    </div> 
                </div>	            	 --}}

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" maxlength="100" class="form-control input-square @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                    <div class="invalid-feedback">
                        @error('name')
                        {{ $message }} 
                        @enderror
                    </div>
                    *maksimal 100 karakter
                </div>	
                            
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" minlength="10" class="form-control input-square @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{old('nik')}}">
                    <div class="invalid-feedback">
                        @error('nik')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 10 karakter
                </div>	
                
                <div class="form-group">
                    <label for="pin">Pin</label>
                    <input type="number" minlength="6" class="form-control input-square @error('pin') is-invalid @enderror" id="pin" name="pin" value="{{old('pin')}}">
                    <div class="invalid-feedback">
                        @error('pin')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 6 karakter
                </div>	

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    {{-- <input type="text" class="form-control input-square @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{old('alamat')}}"> --}}
                    <textarea type="text" maxlength="255" class="form-control input-square @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{old('alamat')}}" cols="30" rows="10"></textarea>
                    <div class="invalid-feedback">
                        @error('alamat')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 255 karakter
                </div>

                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="number" minlength="10" class="form-control input-square @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{old('no_hp')}}">
                    <div class="invalid-feedback">
                        @error('no_hp')
                        {{ $message }} 
                        @enderror
                    </div>
                    *minimal 10 karakter
                </div>

                <div class="form-group">
                    <label for="is_admin"></label>
                    <input type="hidden" class="form-control input-square @error('is_admin') is-invalid @enderror" id="is_admin" name="is_admin" value="0">
                    <div class="invalid-feedback">
                        @error('is_admin')
                        {{ $message }} 
                        @enderror
                    </div>
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