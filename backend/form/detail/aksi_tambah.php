<?php
include '../../../koneksi.php';
if (isset($_POST['submit'])) {
    $kategori = $_POST['KATEGORI'];
    $tanggal_projek = $_POST['TANGGAL_PROJEK'];
    $link = $_POST['LINK'];
    $nama = $_POST['NAMA'];
    $keterangan = $_POST['KETERANGAN'];
    $path = './file/';

    //untuk file
    $foto = $_FILES['FOTO'];
    $nama_gambar = time() . $_FILES['FOTO']['name'];
    $file_tmp = $_FILES['FOTO']['tmp_name'];
    if (move_uploaded_file($file_tmp, $path . $nama_gambar)) {
        $sql = "INSERT INTO detail (KATEGORI,TANGGAL_PROJEK,LINK,NAMA,KETERANGAN,FOTO) values ('$kategori','$tanggal_projek','$link','$nama','$keterangan','$nama_gambar')";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambah!");
                window.location = '../../pages-detail.php';
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
        $foto = $_FILES['FOTO1'];
        $nama_gambar1 = time() . $_FILES['FOTO1']['name'];
        $file_tmp = $_FILES['FOTO1']['tmp_name'];
        if (move_uploaded_file($file_tmp, $path . $nama_gambar1)) {
            $sql = "INSERT INTO detail (KATEGORI,TANGGAL_PROJEK,LINK,NAMA,KETERANGAN,FOTO,FOTO1) values ('$kategori','$tanggal_projek','$link','$nama','$keterangan','$nama_gambar','$nama_gambar1')";
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
            ?>
                <script type="text/javascript">
                    alert("Data Berhasil Ditambah!");
                    window.location = '../../pages-detail.php';
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
        $foto = $_FILES['FOTO2'];
        $nama_gambar2 = time() . $_FILES['FOTO2']['name'];
        $file_tmp = $_FILES['FOTO2']['tmp_name'];
        if (move_uploaded_file($file_tmp, $path . $nama_gambar2)) {
            $sql = "INSERT INTO detail (KATEGORI,TANGGAL_PROJEK,LINK,NAMA,KETERANGAN,FOTO,FOTO1,FOTO2) values ('$kategori','$tanggal_projek','$link','$nama','$keterangan','$nama_gambar','$nama_gambar1','$nama_gambar2')";
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
            ?>
                <script type="text/javascript">
                    alert("Data Berhasil Ditambah!");
                    window.location = '../../pages-detail.php';
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
    }
}
?>
<!-- (KATEGORI,TANGGAL_PROJEK,LINK,NAMA,KETERANGAN) values ('$kategori','$tanggal_projek','$link','$nama','$keterangan') -->