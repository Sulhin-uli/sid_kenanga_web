@extends('layout.v_template-admin')
@section('title','Form Surat')

@section('content')

<form action="/surat/surat_keterangan_pengantar_aksi" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header"> 
            <div class="card-title">Form Surat</div>
        </div>

        <div class="card-body">
            
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
                <input type="text" class="form-control input-square @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}" >
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

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" class="form-control input-square @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}" >
                <div class="invalid-feedback">
                    @error('tanggal_lahir')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="warga_negara">Warga Negara</label>
                <input type="text" class="form-control input-square @error('warga_negara') is-invalid @enderror" id="warga_negara" name="warga_negara" value="{{old('warga_negara')}}" >
                <div class="invalid-feedback">
                    @error('warga_negara')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control input-square @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{old('agama')}}" >
                <div class="invalid-feedback">
                    @error('agama')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control input-square @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{old('jenis_kelamin')}}" >
                <div class="invalid-feedback">
                    @error('jenis_kelamin')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control input-square @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{old('pekerjaan')}}" >
                <div class="invalid-feedback">
                    @error('pekerjaan')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control input-square @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{old('alamat')}}" >
                <div class="invalid-feedback">
                    @error('alamat')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control input-square @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{old('nik')}}" >
                <div class="invalid-feedback">
                    @error('nik')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="no_kk">Nomor KK</label>
                <input type="text" class="form-control input-square @error('no_kk') is-invalid @enderror" id="no_kk" name="no_kk" value="{{old('no_kk')}}" >
                <div class="invalid-feedback">
                    @error('no_kk')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="golongan_darah">Golongan Darah</label>
                <input type="text" class="form-control input-square @error('golongan_darah') is-invalid @enderror" id="golongan_darah" name="golongan_darah" value="{{old('golongan_darah')}}" >
                <div class="invalid-feedback">
                    @error('golongan_darah')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="agama">keperluan</label>
                <textarea  class="form-control input-square @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{old('agama')}}" ></textarea>
                <div class="invalid-feedback">
                    @error('agama')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="agama">Masa Berlaku</label><br>
                <label for="tanggal_awal">tanggal Awal</label>
                <input type="text" class="form-control input-square @error('tanggal_awal') is-invalid @enderror" id="tanggal_awal" name="tanggal_awal" value="{{old('tanggal_awal')}}" >
                <div class="invalid-feedback">
                    @error('tanggal_awal')
                    {{ $message }} 
                    @enderror
                </div>
                <label for="tanggal_akhir">Tanggal Akhir</label>
                <input type="text" class="form-control input-square @error('tanggal_akhir') is-invalid @enderror" id="tanggal_akhir" name="tanggal_akhir" value="{{old('tanggal_akhir')}}" >
                <div class="invalid-feedback">
                    @error('tanggal_akhir')
                    {{ $message }} 
                    @enderror
                </div>
            </div>

        </div>

        <div class="card-action">
            <button type="submit" class="btn btn-success btn-round btn-sm">Buat Surat</button>
            <a href="/penduduk" class="btn btn-danger btn-round btn-sm"> Batal</a>
        </div>

    </div>

</form>
</div>



@endsection