@extends('layout.v_template-admin')
@section('title','Ubah Gamar')

@section('content')




<form action="/gambar_lp/ubah_aksi/{{ $gambar_lp->id}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Ubah Data Gambar</div>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="gambar">Foto</label><br>
                    <img src="{{ url('img-gambar_lp/' . $gambar_lp->gambar)}}" width="100px">
                </div>	

                <div class="form-group">
                    <label for="gambar">Ubah Gambar Baru</label>
                    <input type="file" class="form-control input-square @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{$gambar_lp->gambar}}">
                    <div class="invalid-feedback">
                        @error('gambar')
                        {{ $message }} 
                        @enderror
                    </div>
                </div>	

            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
                <a href="/gambar_lp" class="btn btn-danger btn-round btn-sm"> Batal</a>
            </div>
        </div>

    </form>
    </div>
</div>
@endsection