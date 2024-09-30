<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
</head>

<body>
    <h1>Buat Data Siswa</h1>
    <form action="act_dasis.php" method="post" enctype="multipart/form-data">
        <label for="nisn">NISN :</label> <br>
        <input type="text" name="nisn">
        <br><br>
        <label for="nama">Nama :</label> <br>
        <input type="text" name="nama">
        <br><br>
        <label for="jekel">Jenis Kelamin :</label> <br>
        <input type="radio" name="jenkel" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenkel" value="Perempuan"> Perempuan
        <br><br>
        <label for="kelas">Kelas :</label>
        <select name="kelas">
            <option value="0">Pilih Kelas</option>
            <option value="X RPL">X RPL</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XII RPL">XII RPL</option>
        </select>
        <br><br>
        <label for="hobi">Hobi :</label> <br>
        <input type="checkbox" name="hobi[]" value="Makan"> Makan <br>
        <input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding <br>
        <input type="checkbox" name="hobi[]" value="Turu"> Turu <br>
        <input type="checkbox" name="hobi[]" value="Gaming"> Gaming <br>
        <input type="checkbox" name="hobi[]" value="Wibu"> Wibu
        <br><br>
        <label for="foto">Foto :</label> <br>
        <input type="file" name="foto">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>