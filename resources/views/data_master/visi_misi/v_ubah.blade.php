@extends('layout.v_template-admin')
@section('title','Ubah Visi Misi')

@section('content')




<form action="/visimisi/ubah_aksi/{{ $visimisi->id_visimisi}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Data Visi Misi</div>
        </div>
        <div class="card-body">	

            <div class="form-group">
                <label for="visi">Visi</label>
                <textarea class="form-control input-square @error('visi') is-invalid @enderror" id="visi" name="visi" value="{{$visimisi->visi}}" cols="30" rows="10"><?php echo $visimisi->visi ?></textarea>
                {{-- <input type="text" class="form-control input-square @error('visi') is-invalid @enderror" id="visi" name="visi" value="{{$kabar_desa->visi}}"> --}}
                <div class="invalid-feedback">
                    @error('visi')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	

            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea class="form-control input-square @error('misi') is-invalid @enderror" id="misi" name="misi" value="{{$visimisi->misi}}" cols="30" rows="10"><?php echo $visimisi->misi ?></textarea>
                {{-- <input type="text" class="form-control input-square @error('misi') is-invalid @enderror" id="misi" name="misi" value="{{$visimisi->misi}}"> --}}
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