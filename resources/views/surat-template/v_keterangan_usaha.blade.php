<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Usaha</title>
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
            <h5>Surat Keterangan Usaha s</h5>
        </center>
        <div class="col s12" > 
            <br>
            <br>
            
        <div class="row">
            <form action="/surat/surat_keterangan_usaha_aksi" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="row">
                <div class="input-field col s6">
                    <label for="nomor_surat">Nomor Surat</label>
                    <input type="text" placeholder="" id="nomor_surat" name="nomor_surat" placeholder=""/>
                Contoh : 145 / 070 / Sekdes
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_usaha" name="nama_usaha"/>
                <label for="nama_usaha">Nama Usaha</label>
                Contoh : PABRIK TAHU
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="tanggal_surat" name="tanggal_surat"/>
                <label for="tanggal_surat">Tanggal Surat</label>
                Contoh : 22 Februari 2021
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nik" name="nik" placeholder="Masukkan NIK" autocomplete="off"/>
                <label for="nik">NIK</label>
                Contoh : 1922031234012194
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <label for="nama">Nama Pemohon</label>
                    <input type="text" placeholder="" id="nama" name="nama" placeholder=""/>
                    Contoh : ANDRA FARMANSYAH
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="tempat_lahir" name="tempat_lahir"/>
                <label for="tempat_lahir">Tempat Lahir</label>
                Contoh : Indramayu
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text"  placeholder="" id="tanggal_lahir" name="tanggal_lahir"/>
                <label for="tanggal_lahir">Tanggal Lahir</label>
                Contoh : 08-10-2015
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="jenis_kelamin" name="jenis_kelamin"/>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                Contoh : Laki - laki / Perempuan
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="agama" name="agama"/>
                <label for="agama">Agama</label>
                Contoh : Islam
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="status_perkawinan" name="status_perkawinan"/>
                <label for="status_perkawinan">Status</label>
                Contoh : Menikah / Belum Menikah 
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="kewarganegaraan" name="kewarganegaraan"/>
                <label for="kewarganegaraan">Kewarganegaraan</label>
                Contoh : Indonesia
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="pekerjaan" name="pekerjaan"/>
                <label for="pekerjaan">Pekerjaan</label>
                Contoh : Petani
                </div>
            </div>
            
            <div class="row">
                    <div class="input-field col s12">
                      <textarea id="alamat" name="alamat"  placeholder="" class="materialize-textarea"></textarea>
                      <label for="textarea1">Alamat</label>
                      Contoh : Blok Teluk RT.012 RW.004 Desa Kenanga
                      Kec.Sindang Kab.Indramayu
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
                        $('#status').val(dataCust2[reqdata]['status']);
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
