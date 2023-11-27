<?php 
include '../../../koneksi.php';
if ($_GET['id']) {
    $id = $_GET ['id'];

    $sql = "SELECT * FROM skill where ID = $id";
    $conn -> query ($sql);
    $data = $conn -> query ($sql);
    $row = $data -> fetch_assoc();
    
    $hapus = "DELETE FROM skill where ID = $id";
    if ($conn -> query($hapus) === true) {
    header ('location:../../pages-skill.php');
    }
}
?>