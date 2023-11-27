<?php
include '../../../koneksi.php';
if (isset($_POST['submit'])) {
    $keterangan = $_POST['KETERANGAN'];
    $nama = $_POST['NAMA'];
    $tanggal1 = $_POST['TANGGAL1'];
    $tanggal2 = $_POST['TANGGAL2'];
    $alamat = $_POST['ALAMAT'];
    $keterangan2 = $_POST['KETERANGAN2'];

    $sql = "INSERT INTO resume (KETERANGAN,NAMA,TANGGAL1,TANGGAL2,ALAMAT,KETERANGAN2) values ('$keterangan','$nama','$tanggal1','$tanggal2','$alamat','$keterangan2')";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Ditambah!");
            window.location = '../../pages-resume.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Data Gagal Ditambah!");
            window.location = 'form_tambah.php';
        </script>
<?php
    }
}
?>