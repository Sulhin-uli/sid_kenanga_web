<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Pindah</title>
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
            <h5>Surat Keterangan Pindah</h5>
        </center>
        <div class="col s12" > 
            <br>
            <br>
        <div class="row">
            <form action="/surat/surat_keterangan_pindah_aksi" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nomor_surat" name="nomor_surat"/>
                <label for="nomor_surat">Nomor Surat</label>
                Contoh : 475 / 099 / Kliwon
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="nama_kuwu" name="nama_kuwu"/>
                <label for="nama_kuwu">Nama Kuwu</label>
                Contoh : DARPANI,SH
                </div>
            </div>

            <br>
            <h6>Data Pemohon</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_pemohon" name="nama_pemohon"/>
                <label for="nama_pemohon">Nama Lengkap</label>
                Contoh : SUSILAWATI
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nik" name="nik"/>
                <label for="nik">Nik</label>
                Contoh : 3212165503970003
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="tempat" name="tempat"/>
                <label for="tempat">Tempat Lahir</label>
                Contoh : Indramayu
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="ttl" name="ttl"/>
                <label for="ttl">Tanggal Lahir</label>
                Contoh : 15-03-1997
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="gender" name="gender"/>
                <label for="gender">Jenis Kelamin</label>
                Contoh : Perempuan
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="negara" name="negara"/>
                <label for="negara">Negara</label>
                Contoh : Indonesia
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="agama" name="agama"/>
                <label for="agama">Agama</label>
                Contoh : Islam
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="pekerjaan" name="pekerjaan"/>
                <label for="pekerjaan">Pekerjaan</label>
                Contoh : Mengurus Rumah Tangga 
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="status" name="status"/>
                <label for="status">Status</label>
                Contoh : Kawin
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="alamat_asal" name="alamat_asal"/>
                <label for="alamat_asal">Alamat Asal</label>
                Contoh : Blok Gandok RT.014 RW.005,  Desa Kenanga -
                Kecamatan Sindang Kabupaten Indramayu
                Propinsi Jawa Barat.      
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="pendidikan" name="pendidikan"/>
                <label for="pendidikan">Riwayat Pendidikan</label>
                Contoh : SMK
                </div>
            </div>

            <br>
            <h6>Data Pindah Pemohon</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="desa_pindah" name="desa_pindah"/>
                <label for="desa_pindah">Desa / Kelurahan</label>
                Contoh : PEKANDANGAN
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="blok" name="blok"/>
                <label for="blok">Blok</label>
                Contoh : Dusun C
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <label for="rtrw">Rt / Rw</label>
                    <input type="text" placeholder="" id="rtrw" name="rtrw" placeholder=""/>
                    Contoh : RT.014 RW.005 
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="kecamatan" name="kecamatan"/>
                <label for="kecamatan">Kecamatan</label>
                    Contoh : Indramayu
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" placeholder="" id="kabupaten" name="kabupaten" placeholder=""/>
                    Contoh : Indramayu
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="provinsi" name="provinsi"/>
                <label for="provinsi">Provinsi</label>
                Contoh : Jawa Barat
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <label for="tgl_pindah">Tanggal Pindah</label>
                    <input type="text" placeholder="" id="tgl_pindah" name="tgl_pindah" placeholder=""/>
                    Contoh : 18 Maret 2021
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="alasan_pindah" name="alasan_pindah"/>
                <label for="alasan_pindah">Alasan Pindah</label>
                Contoh : Perumahan
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <label for="ikut_pindah">Ikut Pindah</label>
                    <input type="text" placeholder="" id="ikut_pindah" name="ikut_pindah" placeholder=""/>
                    Contoh : 1 Orang
                </div>
            </div>
            
            <br>
            <h6>Data Surat</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <label for="tanggal_surat">Tanggal Surat</label>
                    <input type="text" placeholder="" id="tanggal_surat" name="tanggal_surat" placeholder=""/>
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="juru_tulis" name="juru_tulis"/>
                <label for="juru_tulis">Nama Juru Tulis</label>
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
