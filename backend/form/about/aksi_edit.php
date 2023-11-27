<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $keterangan = $_POST['KETERANGAN'];
    $nama = $_POST['NAMA'];
    $birthday = $_POST['BIRTHDAY'];
    $no_hp = $_POST['NO_HP'];
    $kota = $_POST['KOTA'];
    $umur = $_POST['UMUR'];
    $derajat = $_POST['DERAJAT'];
    $email = $_POST['EMAIL'];
    $keterangan2 = $_POST['KETERANGAN2'];

    $sql = "SELECT * FROM about where ID = $id";
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
            $sql = "UPDATE about SET KETERANGAN = '$keterangan', NAMA = '$nama', BIRTHDAY = '$birthday', NO_HP = '$no_hp', KOTA = '$kota', UMUR = '$umur', DERAJAT = '$derajat', EMAIL = '$email', KETERANGAN2 = '$keterangan2', FOTO = '$nama_gambar' where ID = $id";
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
?>
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan!");
                    window.location = '../../pages-about.php';
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
        $sql = "UPDATE about SET KETERANGAN = '$keterangan', NAMA = '$nama', BIRTHDAY = '$birthday', NO_HP = '$no_hp', KOTA = '$kota', UMUR = '$umur', DERAJAT = '$derajat', EMAIL = '$email', KETERANGAN2 = '$keterangan2' where ID = $id";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location = '../../pages-about.php';
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
