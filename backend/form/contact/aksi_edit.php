<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $keterangan = $_POST['KETERANGAN'];
    $alamat = $_POST['ALAMAT'];
    $email = $_POST['EMAIL'];
    $no_hp = $_POST['NO_HP'];

    $sql = "UPDATE contact SET KETERANGAN = '$keterangan', ALAMAT = '$alamat', EMAIL = '$email', NO_HP = '$no_hp' where ID = $id";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../pages-contact.php';
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