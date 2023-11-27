<?php 
include '../../koneksi.php';
if (isset ($_POST ['submit'])) {
    $nama = $_POST ['NAMA'];
    $email = $_POST ['EMAIL'];
    $subjek = $_POST ['SUBJEK'];
    $pesan = $_POST ['PESAN'];

        $sql = "INSERT INTO kontak (NAMA,EMAIL,SUBJEK,PESAN) values ('$nama','$email','$subjek','$pesan')";
        if ($conn -> query ($sql) === true) {
           header ("location:../index.php");
        }
    }
?>