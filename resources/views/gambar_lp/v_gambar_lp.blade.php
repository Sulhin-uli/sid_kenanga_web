@extends('layout.v_template-admin')
@section('title','Gambar Halaman Depan')

@section('content')

@if (session('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
    </div>
@endif

<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover data">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($gambar_lp as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td><img src="{{ url('img-gambar_lp/' . $data->gambar)}}" width="50px"></td>
                            <td>
                                <a href="/gambar_lp/ubah/{{ $data->id }}" class="btn btn-warning btn-round btn-xs">Ubah</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

    
@endsection