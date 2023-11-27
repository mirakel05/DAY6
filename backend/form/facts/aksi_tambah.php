<?php 
include '../../../koneksi.php';
if (isset ($_POST ['submit'])) {
    $keterangan= $_POST ['KETERANGAN'];
    $nomer = $_POST ['NOMER'];
    $nama = $_POST ['NAMA'];
    $keterangan2 = $_POST ['KETERANGAN2'];
    $nomer2 = $_POST ['NOMER2'];
    $nama2 = $_POST ['NAMA2'];
    $keterangan3 = $_POST ['KETERANGAN3'];
    $nomer3 = $_POST ['NOMER3'];
    $nama3 = $_POST ['NAMA3'];
    $keterangan4 = $_POST ['KETERANGAN4'];
    

        $sql = "INSERT INTO facts (KETERANGAN,NOMER,NAMA,KETERANGAN2,NOMER2,NAMA2,KETERANGAN3,NOMER3,NAMA3,KETERANGAN4) values ('$keterangan','$nomer','$nama','$keterangan2','$nomer2','$nama2','$keterangan3','$nomer3','$nama3','$keterangan4')";
        $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../pages-facts.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Data Gagal Disimpan!");
            window.location = 'form_tambah.php';
        </script>
<?php
    }
    }
?>