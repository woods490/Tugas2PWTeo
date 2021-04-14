<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="./css/add.css">
</head>
<body>
     <div class="container">
        <h1>Tambah</h1>
        <div class="back">
            <a class="back-btn" href="index.php">Back<a>
        </div>
        <form action="process.php" method = "POST">
            <input type="number" name="IDPerson" id="IDPerson" placeholder="IDPerson" required>
            <input type="text" name = "Nama" id="Nama" placeholder="Nama" required>
            <div class="genderopt">
                <label for="men">Laki-laki</label> 
                <input type="radio" name="Gender" value="L" id="men">
                <label for="women">Perempuan</label>
                <input type="radio" name="Gender" value="P" id="women">
            </div>
            <input type="text" name="KotaLahir" id="KotaLahir" placeholder="Kota Kelahiran">
            <input type="date" name="TanggalLahir" id="TanggalLahir" placeholder="Tanggal Lahir">
            <input type="text" name="Alamat" id="Alamat" placeholder="Alamat">
            <input type="text" name="Kota" id="Kota" placeholder="Kota">
            <button type="submit" name="submit" id="submit">Tambah</button>
        </form>
    </div>
</body>
</html>