@extends('layout.v_template-admin')
@section('title','Surat')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover data">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Layanan Administrasi Surat</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($surat as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_surat}}</td>
                                <td>
                                    <a href="/surat/{{ $data->value_surat}}" class="btn btn-primary btn-round btn-xs" style="color: rgb(255, 255, 255)" >Buat Surat</a>
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