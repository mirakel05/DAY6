<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $keterangan = $_POST['KETERANGAN'];
    $nama1 = $_POST['NAMA1'];
    $keterangan1 = $_POST['KETERANGAN1'];
    $nama2 = $_POST['NAMA2'];
    $keterangan2 = $_POST['KETERANGAN2'];
    $nama3 = $_POST['NAMA3'];
    $keterangan3 = $_POST['KETERANGAN3'];

    $sql = "UPDATE services SET KETERANGAN = '$keterangan', NAMA1 = '$nama1', KETERANGAN1 = '$keterangan1', NAMA2 = '$nama2', KETERANGAN2 = '$keterangan2', NAMA3 = '$nama3', KETERANGAN3 = '$keterangan3'  where ID = $id";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../pages-services.php';
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