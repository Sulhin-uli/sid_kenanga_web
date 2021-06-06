<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Gempur Gakin SKTM</title>
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
            <h5>Surat Keterangan Gempur Gakin SKTM</h5>
        </center>
        <div class="col s12" > 
            <br>
            <br>
        <div class="row">
            <form action="/surat/surat_gempur_gakin_sktm_aksi" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="row">
                <div class="input-field col s6">
                    <label for="nomor_surat">Nomor Surat</label>
                    <input type="text" placeholder="" id="nomor_surat" name="nomor_surat" placeholder=""/>
                    Contoh : 145 / 070 / Sekdes
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama" name="nama"/>
                <label for="nama">Nama Pemohon</label>
                Contoh : PUTRI AYU OKTAPRIANI
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="ttl" name="ttl"/>
                <label for="ttl">Tempat,Tanggal Lahir</label>
                Contoh : Indramayu, 08-10-2015
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="umur" name="umur"/>
                <label for="umur">Umur</label>
                Contoh : 5 Tahun
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="alamat_lengkap" name="alamat_lengkap"/>
                <label for="alamat_lengkap">Alamat Lengkap</label>
                Contoh : Blok Teluk RT.012 RW.004 Desa Kenanga
                Kec.Sindang Kab.Indramayu
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="tanggal_surat" name="tanggal_surat"/>
                <label for="tanggal_surat">Tanggal Surat</label>
                Contoh : 22 Februari 2021
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_kuwu" name="nama_kuwu"/>
                <label for="nama_kuwu">Nama Kuwu</label>
                Contoh : DARPANI,SH
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="nip" name="nip"/>
                <label for="nip">Nip Kuwu</label>
                Contoh : 19650825 200701 1 026
                </div>
            </div>
            
            <br>
            <h6>Data Wali / Orang Tua</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_ortu" name="nama_ortu"/>
                <label for="nama_ortu">Nama Orang Tua (Ayah/Ibu)</label>
                Contoh : ATO SUPRIADI
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="ttl_ortu" name="ttl_ortu"/>
                <label for="ttl_ortu">Tempat, Tanggal Lahir</label>
                Contoh : Indramayu, 08-04-1989
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="pekerjaan_ortu" name="pekerjaan_ortu"/>
                <label for="pekerjaan_ortu">Pekerjaan</label>
                Contoh : Pedagang
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="alamat_ortu" name="alamat_ortu"/>
                <label for="alamat_ortu">Alamat</label>
                Contoh : Blok Teluk RT.012 RW.004 Desa Kenanga
                Kec.Sindang Kab.Indramayu
                </div>
            </div>

            <br>
            <h6>Data Rujukan</h6>
            </br>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="rumah_sakit" name="rumah_sakit"/>
                <label for="rumah_sakit">Nama Rumah Sakit</label>
                Contoh : RS.Cicendo Bandung
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
