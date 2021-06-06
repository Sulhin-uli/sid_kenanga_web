<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Domisili Perusahaan</title>
    {{-- !-- FavIcon --> --}}
    <link rel="shortcut icon" href="{{asset('profile')}}/assets/img/Indramayu.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row" style="padding-top:80px">
        <center>
            <h5>Surat Keterangan Domisili Perusahaan</h5>
        </center>
        <div class="col s12" > 
            <br>
            
        <div class="row">
            <form action="/surat/surat_keterangan_domisili_perusahaan_aksi" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="row">
                <div class="input-field col s6">
                    <label for="nomor_surat">Nomor Surat</label>
                    <input type="text" placeholder="" id="nomor_surat" name="nomor_surat" placeholder=""/>
                    Contoh : 145 / 58 / Sekdes
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="tanggal_surat" name="tanggal_surat"/>
                <label for="tanggal_surat">Tanggal Surat</label>
                Contoh : 22 Oktober 2016
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_kuwu" name="nama_kuwu"/>
                <label for="nama_kuwu">Nama Kuwu</label>
                Contoh : DARPANI,SH
                </div>
            </div>

            <br>
            <h6>Data Perusahaan</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_perusahaan" name="nama_perusahaan"/>
                <label for="nama_perusahaan">Nama Perusahaan</label>
                Contoh : KSU.MITRA INDUSTRI
                </div>
                <div class="input-field col s6">
                    <label for="nama_pemilik">Nama Pemilik</label>
                    <input type="text" placeholder="" id="nama_pemilik" name="nama_pemilik" placeholder=""/>
                    Contoh : H.ABDUL AJID
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="alamat_lengkap" name="alamat_lengkap"/>
                <label for="alamat_lengkap">Alamat Lengkap</label>
                Contoh : Blok  Dukuh  RT.022 RW.07, Desa Kenanga –
                Kecamatan Sindang Kabupaten Indramayu.
                </div>
            </div>
            
              <br>
            <div class="card-action">
                <button type="submit" class="btn btn-success btn-round btn-sm">Buat Surat</button>
                <a href="/surat" class="btn btn-danger btn-round btn-sm"> Batal</a>
            </div>
        </form>
        </div>    

    </div>

    
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        console.log('test');
        $.ajax({
            type:'get',
            url:'{!!URL::to('findPenduduk')!!}',
            success:function(response){
                console.log(response);
                //material css
                //convert array to object
                var custArray = response;
                var dataCust = {};
                var dataCust2 = {};
                for (var i=0; i < custArray.length; i++) {
                    dataCust[custArray[i].nik] = null;
                    dataCust2[custArray[i].nik] = custArray[i];
                }
                console.log("dataCust2");
                console.log(dataCust2);
                //convert end
                $('input#nik').autocomplete({
                    data: dataCust,
                    onAutocomplete:function(reqdata){
                        console.log(reqdata);
                        $('#nama').val(dataCust2[reqdata]['nama']);
                        $('#nik').val(dataCust2[reqdata]['nik']);
                        $('#tempat_lahir').val(dataCust2[reqdata]['tempat_lahir']);
                        $('#tanggal_lahir').val(dataCust2[reqdata]['tanggal_lahir']);
                        $('#jenis_kelamin').val(dataCust2[reqdata]['jenis_kelamin']);
                        $('#agama').val(dataCust2[reqdata]['agama']);
                        $('#status_perkawinan').val(dataCust2[reqdata]['status_perkawinan']);
                        $('#kewarganegaraan').val(dataCust2[reqdata]['kewarganegaraan']);
                        $('#pekerjaan').val(dataCust2[reqdata]['pekerjaan']);
                        $('#alamat').val(dataCust2[reqdata]['alamat']);
                    }
                });
                //end
            }
        })
    });
</script>
</body>
</html>
