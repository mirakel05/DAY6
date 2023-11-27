<?php 
include '../../../koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  </head>
  <body>
    <div class="container">
  <form action="aksi_tambah.php" method = "POST" enctype = "multipart/form-data">
    <form class="row g-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Kategori</label>
  <input type="text" class="form-control" name = "KATEGORI" id="exampleFormControlInput1" placeholder="masukan">
</div>  
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Tanggal Projek</label>
  <input type="date" class="form-control" name = "TANGGAL_PROJEK" id="exampleFormControlInput1" placeholder="masukan">
</div>    
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Link</label>
  <input type="text" class="form-control" name = "LINK" id="exampleFormControlInput1" placeholder="masukan">
</div>    
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Nama</label>
  <input type="text" class="form-control" name = "NAMA" id="exampleFormControlInput1" placeholder="masukan">
</div>     
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Keterangan</label>
  <input type="text" class="form-control" name = "KETERANGAN" id="exampleFormControlInput1" placeholder="masukan">
</div>  
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Foto</label>
  <input type="file" class="form-control" name = "FOTO" id="exampleFormControlInput1" placeholder="masukan">
</div>  
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Foto1</label>
  <input type="file" class="form-control" name = "FOTO1" id="exampleFormControlInput1" placeholder="masukan">
</div>  
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Masukan Foto2</label>
  <input type="file" class="form-control" name = "FOTO2" id="exampleFormControlInput1" placeholder="masukan">
</div>  
  <br>
  <button type="submit" class="btn btn-secondary" name = "submit" value = "submit">Tambah</button>
</div>   
</form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
  </body>
</html>
