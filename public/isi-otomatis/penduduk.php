<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "sid_db");

//variabel nim yang dikirimkan form.php
$nim = $_GET['nik'];

//mengambil data
$query = mysqli_query($koneksi, "select * from penduduk where nik='$nik'");
$penduduk = mysqli_fetch_array($query);
$data = array(
    'nama'      =>  $penduduk['nama'],
);

//tampil data
echo json_encode($data);
