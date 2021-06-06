<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Ahli Waris Bank</title>
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
            <h5>Surat Keterangan Ahli Waris Bank</h5>
        </center>
        <div class="col s12" > 
            <br>
            <br>
        <div class="row">
            <form action="/surat/surat_keterangan_ahliwaris_bank_aksi" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="reg_nomor" name="reg_nomor"/>
                <label for="reg_nomor">Reg Nomor</label>
                Contoh : 145 / 071 / Sekdes
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
                    <input type="text" placeholder="" id="nip" name="nip"/>
                <label for="nip">Nip</label>
                Contoh : 19650825 200701 1 026
                </div>
            </div>

            <br>
            <h6>Data Ahli Waris</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <label for="nama_pewaris">Nama Pewaris</label>
                    <input type="text" placeholder="" id="nama_pewaris" name="nama_pewaris" placeholder=""/>
                    Contoh : Alm Bapak/Ibu NAMA  
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="hari" name="hari"/>
                <label for="hari">Hari Meninggalnya Pewaris</label>
                Contoh : Kamis
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="tgl_meninggal" name="tgl_meninggal"/>
                <label for="tgl_meninggal">Tanggal Meninggal Pewaris</label>
                Contoh : 28 Januari  2021
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="gender_ahliwaris" name="gender_ahliwaris"/>
                <label for="gender_ahliwaris">Gender Ahli Waris</label>
                Contoh : laki - laki / perempuan
                </div>
            </div>
            
            <br>
            <h6>Data Ahli Waris</h6>
            </br>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="nama_ahliwaris" name="nama_ahliwaris"/>
                <label for="nama_ahliwaris">Nama Ahli Waris</label>
                Contoh : SAMTONO
                </div>
                <div class="input-field col s6">
                    <input type="text" class="datepicker" placeholder="" id="ttl_ahliwaris" name="ttl_ahliwaris"/>
                <label for="ttl_ahliwaris">Tempat, Tanggal Lahir</label>
                Contoh : Indramayu, 18-08-1998
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="alamat_ahliwaris" name="alamat_ahliwaris"/>
                <label for="alamat_ahliwaris">Alamat</label>
                Contoh : Blok  Krajan RT. 007 RW. 003 Desa Kenanga 
                Kecamatan Sindang Kab. Indramayu 
                </div>
            </div>

            <br>
            <h6>Data Bank</h6>
            </br>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="" id="no_rek" name="no_rek"/>
                <label for="no_rek">No Rekening</label>
                Contoh : 421201006673535
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
