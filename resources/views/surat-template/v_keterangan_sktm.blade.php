<!DOCTYPE html>
<html>
<head>
    <title>Surat Pernyataan SKTM</title>
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
            <h5>Surat Pernyataan SKTM</h5>
        </center>
        <div class="col s12" > 
            <br>
            <br>
        <div class="row">
            <form action="/surat/surat_pernyataan_sktm_aksi" method="POST" enctype="multipart/form-data">
                @csrf

            <br>
            <h6>Data Pemohon</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_pemohon" name="nama_pemohon"/>
                <label for="nama_pemohon">Nama Lengkap</label>
                Contoh : AAN KANECI
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="ttl" name="ttl"/>
                <label for="ttl">Tempat, Tanggal Lahir</label>
                Contoh : Indramayu, 12-03-1990
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nik" name="nik"/>
                <label for="nik">Nik</label>
                Contoh : 3212165203900006
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="agama" name="agama"/>
                <label for="agama">Agama</label>
                Contoh : Islam
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="status" name="status"/>
                <label for="status">Status</label>
                Contoh : Kawin / Belum Kawin
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="pekerjaan" name="pekerjaan"/>
                <label for="pekerjaan">Pekerjaan</label>
                Contoh : Mengurus Rumah Tangga
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="alamat_lengkap" name="alamat_lengkap"/>
                <label for="alamat_lengkap">Alamat</label>
                Contoh : Desa Kenanga Blok Gandok RT.013 RW.005 
                Kecamatan Sindang Kabupaten Indramayu
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="gender" name="gender"/>
                <label for="gender">Jenis Kelamin</label>
                Contoh : Perempuan / Laki - laki
                </div>
            </div>

            <br>
            <h6>Data Pemilik Rumah</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="pemilik_rumah" name="pemilik_rumah"/>
                <label for="pemilik_rumah">Rumah Keluarga</label>
                Contoh : IDAH AZIZAH
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="rt" name="rt"/>
                <label for="rt">Rt</label>
                Contoh : 011
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="rw" name="rw"/>
                <label for="rw">Rw</label>
                Contoh : 004
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="desa" name="desa"/>
                <label for="desa">Desa / Kelurahan</label>
                Contoh : KENANGA
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="kecamatan" name="kecamatan"/>
                <label for="kecamatan">Kecamatan</label>
                Contoh : SINDANG
                </div>
            </div>

            <br>
            <h6>Data Surat</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <label for="tanggal_surat">Tanggal Surat</label>
                    <input type="text" placeholder="" id="tanggal_surat" name="tanggal_surat" placeholder=""/>
                    Contoh : 30  Juni 2020
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_kuwu" name="nama_kuwu"/>
                <label for="nama_kuwu">Nama Kuwu</label>
                Contoh : DARPANI,SH
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
