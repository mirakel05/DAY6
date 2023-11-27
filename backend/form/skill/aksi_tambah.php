<?php
include '../../../koneksi.php';
if (isset($_POST['submit'])) {
    $keterangan = $_POST['KETERANGAN'];
    $nama = $_POST['NAMA'];
    $angka = $_POST['ANGKA'];

    $sql = "INSERT INTO skill (KETERANGAN,NAMA,ANGKA) values ('$keterangan','$nama','$angka')";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Ditambah!");
            window.location = '../../pages-skill.php';
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