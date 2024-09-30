<?php

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$kelas = $_POST['kelas'];
$hobi = $_POST['hobi'];

$boleh = array('png', 'jpg', 'jpeg');
$lokasi = $_FILES['foto']['tmp_name'];
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$folder = "foto/$filename";

if ($filename == "") {
    echo "NISN : $nisn <br>
      Nama : $nama <br>
      Jenis Kelamin : $jenkel <br>
      Kelas : $kelas <br>
      Hobi : <br>";
    foreach ($hobi as $index) {
        echo "- $index <br>";
    }
} else {
    if (!in_array($ext, $boleh)) {
        echo "<script>
                alert('Ekstensi Tidak Diperbolehkan!');
              </script>";
    } else {
        move_uploaded_file($lokasi, "$folder");
        echo "NISN : $nisn <br>
              Nama : $nama <br>
              Jenis Kelamin : $jenkel <br>
              Kelas : $kelas <br>
              Hobi : <br>";
        foreach ($hobi as $index) {
            echo "- $index <br>";
        }
        echo "<br> <img src='foto/$filename' width='250'>";
    }
}
