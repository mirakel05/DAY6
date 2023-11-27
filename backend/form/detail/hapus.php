<?php 
include '../../../koneksi.php';
if ($_GET['id']) {
    $id = $_GET ['id'];

    $sql = "SELECT * FROM detail where ID = $id";
    $conn -> query ($sql);
    $data = $conn -> query ($sql);
    $row = $data -> fetch_assoc();
    $path = './file/';

    var_dump ($row);    

    if (file_exists ($path.$row ['FOTO'])) {
        unlink ($path.$row ['FOTO']);
    }
    if (file_exists ($path.$row ['FOTO1'])) {
        unlink ($path.$row ['FOTO1']);
    }
    if (file_exists ($path.$row ['FOTO2'])) {
        unlink ($path.$row ['FOTO2']);
    }
    
    $hapus = "DELETE FROM detail where ID = $id";
    if ($conn -> query($hapus) === true) {
    header ('location:../../pages-detail.php');
    }
}
?>