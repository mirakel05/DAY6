<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $keterangan = $_POST['KETERANGAN'];
    $nama = $_POST['NAMA'];
    $tanggal1 = $_POST['TANGGAL1'];
    $tanggal2 = $_POST['TANGGAL2'];
    $alamat = $_POST['ALAMAT'];
    $keterangan2 = $_POST['KETERANGAN2'];

    $sql = "UPDATE resume SET KETERANGAN = '$keterangan', NAMA = '$nama', TANGGAL1 = '$tanggal1', TANGGAL2 = '$tanggal2', ALAMAT = '$alamat', KETERANGAN2 = '$keterangan2' where ID = $id";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../pages-resume.php';
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