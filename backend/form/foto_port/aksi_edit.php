<?php
include '../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['ID'];

    $sql = "SELECT * FROM foto_port where ID = $id";
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
            $sql = "UPDATE foto_port SET FOTO = '$nama_gambar' where ID = $id";
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
?>
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan!");
                    window.location = '../../pages-foto_port.php';
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
                $sql = "UPDATE foto_port SET FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
                $sql = "UPDATE foto_port SET  FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
        if ($_FILES['FOTO3']['error'] !== 4) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO3'];
            $nama_gambar3 = time() . $_FILES['FOTO3']['name'];
            $file_tmp = $_FILES['FOTO3']['tmp_name'];

            if (file_exists($path . $row['FOTO3'])) {
                unlink($path . $row['FOTO3']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar3)) {
                $sql = "UPDATE foto_port SET  FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2', FOTO3 = '$nama_gambar3' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
        if ($_FILES['FOTO4']['error'] !== 4) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO4'];
            $nama_gambar4 = time() . $_FILES['FOTO4']['name'];
            $file_tmp = $_FILES['FOTO4']['tmp_name'];

            if (file_exists($path . $row['FOTO4'])) {
                unlink($path . $row['FOTO4']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar4)) {
                $sql = "UPDATE foto_port SET  FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2', FOTO3 = '$nama_gambar3', FOTO4 = '$nama_gambar4' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
        if ($_FILES['FOTO5']['error'] !== 5) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO5'];
            $nama_gambar5 = time() . $_FILES['FOTO5']['name'];
            $file_tmp = $_FILES['FOTO5']['tmp_name'];

            if (file_exists($path . $row['FOTO5'])) {
                unlink($path . $row['FOTO5']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar5)) {
                $sql = "UPDATE foto_port SET  FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2', FOTO3 = '$nama_gambar3', FOTO4 = '$nama_gambar4', FOTO5 = '$nama_gambar5' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
        if ($_FILES['FOTO6']['error'] !== 6) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO6'];
            $nama_gambar6 = time() . $_FILES['FOTO6']['name'];
            $file_tmp = $_FILES['FOTO6']['tmp_name'];

            if (file_exists($path . $row['FOTO6'])) {
                unlink($path . $row['FOTO6']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar6)) {
                $sql = "UPDATE foto_port SET  FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2', FOTO3 = '$nama_gambar3', FOTO4 = '$nama_gambar4', FOTO5 = '$nama_gambar5', FOTO6 = '$nama_gambar6' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
        if ($_FILES['FOTO7']['error'] !== 7) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO7'];
            $nama_gambar7 = time() . $_FILES['FOTO7']['name'];
            $file_tmp = $_FILES['FOTO7']['tmp_name'];

            if (file_exists($path . $row['FOTO7'])) {
                unlink($path . $row['FOTO7']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar7)) {
                $sql = "UPDATE foto_port SET  FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2', FOTO3 = '$nama_gambar3', FOTO4 = '$nama_gambar4', FOTO5 = '$nama_gambar5', FOTO6 = '$nama_gambar6', FOTO7 = '$nama_gambar7' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
        if ($_FILES['FOTO8']['error'] !== 8) {
            //if (isset ($_FILES ['FOTO_SISWA'])) {
            //untuk file
            $foto = $_FILES['FOTO8'];
            $nama_gambar8 = time() . $_FILES['FOTO8']['name'];
            $file_tmp = $_FILES['FOTO8']['tmp_name'];

            if (file_exists($path . $row['FOTO8'])) {
                unlink($path . $row['FOTO8']);
            }

            if (move_uploaded_file($file_tmp, $path . $nama_gambar8)) {
                $sql = "UPDATE foto_port SET  FOTO = '$nama_gambar', FOTO1 = '$nama_gambar1', FOTO2 = '$nama_gambar2', FOTO3 = '$nama_gambar3', FOTO4 = '$nama_gambar4', FOTO5 = '$nama_gambar5', FOTO6 = '$nama_gambar6', FOTO7 = '$nama_gambar7', FOTO8 = '$nama_gambar8' where ID = $id";
                $berhasil = ($conn->query($sql) === true);

                if ($berhasil) {
                ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan!");
                        window.location = '../../pages-foto_port.php';
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
        $sql = "UPDATE foto_port SET FOTO = '$nama_gambar' where ID = $id";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location = '../../pages-foto_port.php';
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