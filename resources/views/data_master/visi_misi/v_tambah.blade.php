@extends('layout.v_template-admin')
@section('title','Tambah Visi Misi')

@section('content')

<form action="/visimisi/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf
 
<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Visi Misi</div>
        </div>

            <div class="form-group">
                <label for="visi">Visi</label>
                <textarea cols="30" rows="10" class="form-control input-square @error('visi') is-invalid @enderror" id="visi" name="visi" value="{{old('visi')}}"></textarea>
                {{-- <input type="text" class="form-control input-square @error('visi') is-invalid @enderror" id="isi" name="isi" value="{{old('isi')}}" > --}}
                <div class="invalid-feedback">
                    @error('visi')
                    {{ $message }} 
                    @enderror
                </div>
            </div>		
               
            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea cols="30" rows="10" class="form-control input-square @error('misi') is-invalid @enderror" id="misi" name="misi" value="{{old('misi')}}"></textarea>
                {{-- <input type="text" class="form-control input-square @error('misi') is-invalid @enderror" id="isi" name="isi" value="{{old('isi')}}" > --}}
                <div class="invalid-feedback">
                    @error('misi')
                    {{ $message }} 
                    @enderror
                </div>
            </div>									
        </div>

        <div class="card-action">
            <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
            <a href="/visimisi" class="btn btn-danger btn-round btn-sm"> Batal</a>
        </div>
    </div>

</form>
</div>


@endsection