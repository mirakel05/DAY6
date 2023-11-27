<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $keterangan = $_POST['KETERANGAN'];
    $nomer = $_POST['NOMER'];
    $nama = $_POST['NAMA'];
    $keterangan2 = $_POST['KETERANGAN2'];
    $nomer2 = $_POST['NOMER2'];
    $nama2 = $_POST['NAMA2'];
    $keterangan3 = $_POST['KETERANGAN3'];
    $nomer3 = $_POST['NOMER3'];
    $nama3 = $_POST['NAMA3'];
    $keterangan4 = $_POST['KETERANGAN4'];

    $sql = "UPDATE facts SET KETERANGAN = '$keterangan', NOMER = '$nomer', NAMA = '$nama', KETERANGAN2 = '$keterangan2', NOMER2 = '$nomer2', NAMA2 = '$nama2', KETERANGAN3 = '$keterangan3', NOMER3 = '$nomer3', NAMA3 = '$nama3', KETERANGAN4 = '$keterangan4'  where ID = $id";
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
            window.location = 'form_edit.php';
        </script>
<?php
    }
}
?>