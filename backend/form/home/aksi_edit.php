<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];

    $sql = "SELECT * FROM home where ID = $id";
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
            $sql = "UPDATE home SET NAMA = '$nama', ALAMAT = '$alamat', FOTO = '$nama_gambar' where ID = $id";
            var_dump($sql);
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
?>
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan!");
                    window.location = '../../pages-home.php';
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
        //}
    } else {
        $sql = "UPDATE home SET NAMA = '$nama', ALAMAT = '$alamat' where ID = $id";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location = '../../pages-home.php';
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