<?php

//panggil function
include('../hari_4/function_tgl.php');
//Membuat koneksi ke databases
include '../config/koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
//convert ke database
$tgl = Inputtgl($tanggal);
$jenkel = $_POST['jenkel'];
$kelas = $_POST['kelas'];
$hobi = implode(", ", $_POST['hobi']);
//foto
$boleh = array('png', 'jpg', 'jpeg');
$lokasi = $_FILES['foto']['tmp_name'];
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$folder = "../foto/$filename";

if ($filename == "") {
    $query = "INSERT INTO tbl_siswa(nisn, nama, tanggal, jenkel, kelas, hobi) VALUES ('$nisn', '$nama', '$tgl', '$jenkel', '$kelas', '$hobi')";
    $hasil = mysqli_query($koneksi, $query);
    if ($hasil) {
        echo "<script>
                alert('Data Disimmpan');
                history.go(-1);
              </script>";
    }
} else {
    if (!in_array($ext, $boleh)) {
        echo "<script>
                alert('Ekstensi Tidak Diperbolehkan!');
              </script>";
    } else {
        move_uploaded_file($lokasi, "$folder");
        $query = "INSERT INTO tbl_siswa(nisn, nama, tanggal, jenkel, kelas, hobi, foto) VALUES ('$nisn', '$nama', '$tgl', '$jenkel', '$kelas', '$hobi', '$filename')";
        $hasil = mysqli_query($koneksi, $query);
        if ($hasil) {
            echo "<script>
                alert('Data Disimmpan');
                location.replace('../hari_3/read.php');
              </script>";
        }
    }
}
