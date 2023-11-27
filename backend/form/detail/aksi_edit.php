<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $kategori = $_POST['KATEGORI'];
    $tanggal_projek = $_POST['TANGGAL_PROJEK'];
    $link = $_POST['LINK'];
    $nama = $_POST['NAMA'];
    $keterangan = $_POST['KETERANGAN'];

    $sql = "SELECT * FROM detail where ID = $id";
    $conn->query($sql);
    $data = $conn->query($sql);
    $row = $data->fetch_assoc();
    $path = './file/';

    if ($_FILES['FOTO']['error'] !== 4) {
        //if (isset ($_FILES ['FOTO_SISWA'])) {
        //untuk file
        $foto = $_FILES['FOTO'];
        $nama_gambar = time() . $_FILES['FOTO']['name'];
        $file_tmp = $_FILES['FOTO']['tmp_name'];

        if (file_exists($path . $row['FOTO'])) {
            unlink($path . $row['FOTO']);
        }

        if (move_uploaded_file($file_tmp, $path . $nama_gambar)) {
            $sql = "UPDATE detail SET KATEGORI = '$kategori', TANGGAL_PROJEK = '$tanggal_projek', LINK = '$link', NAMA = '$nama', KETERANGAN = '$keterangan', FOTO = '$nama_gambar' where ID = $id";
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
?>
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan!");
                    window.location = '../../pages-detail.php';
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
        if ($_FILES['FOTO1']['error'] !== 4) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO1'];
            $nama_gambar1 = time() . $_FILES['FOTO1']['name'];
            $file_tmp = $_FILES['FOTO1']['tmp_name'];

            if (file_exists($path . $row['FOTO1'])) {
                unlink($path . $row['FOTO1']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar1)) {
                $sql = "UPDATE detail SET KATEGORI = '$kategori', TANGGAL_PROJEK = '$tanggal_projek', LINK = '$link', NAMA = '$nama', KETERANGAN = '$keterangan', FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-detail.php';
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
        }
        //}
        if ($_FILES['FOTO2']['error'] !== 4) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO2'];
            $nama_gambar2 = time() . $_FILES['FOTO2']['name'];
            $file_tmp = $_FILES['FOTO2']['tmp_name'];

            if (file_exists($path . $row['FOTO2'])) {
                unlink($path . $row['FOTO2']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar2)) {
                $sql = "UPDATE detail SET KATEGORI = '$kategori', TANGGAL_PROJEK = '$tanggal_projek', LINK = '$link', NAMA = '$nama', KETERANGAN = '$keterangan', FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-detail.php';
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
        }
        //}
    } else {
        $sql = "UPDATE detail SET KATEGORI = '$kategori', TANGGAL_PROJEK = '$tanggal_projek', LINK = '$link', NAMA = '$nama', KETERANGAN = '$keterangan', FOTO = '$nama_gambar' where ID = $id";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location = '../../pages-detail.php';
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
}
?>

<!-- KATEGORI = '$kategori', TANGGAL_PROJEK = '$tanggal_projek', LINK = '$link', NAMA = '$nama', KETERANGAN = '$keterangan' -->