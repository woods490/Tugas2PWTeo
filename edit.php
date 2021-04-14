<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="./css/edit.css">
</head>
<body>
    <?php
        if (isset($_GET['edit'])){
            $id = $_GET['edit'];
            $mysqli = new mysqli('', 'nutrienf_tugas2gentur', 'K9tT(c%wt6cA', 'nutrienf_tugas2gentur') or die (mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM person WHERE IDPerson=$id") or die ($mysqli->error);
        }
        ?>
    <h1>Edit</h1>
    <div class="back">
        <a class="back-btn" href="index.php">Back<a>
    </div>
    <div class="content">
        <div class="keterangan">
            <label>Nama</label>
            <label>Gender</label>
            <label>Kota Lahir</label>
            <label>Tanggal Lahir</label>
            <label>Alamat</label>
            <label>Kota</label>
        </div>
        <div class="isi">
            <?php 
                while ($row = $result->fetch_assoc()): ?>
            <form action="process.php" method = "POST">
                <input type="hidden" name="IDPerson" id="IDPerson" value=<?php echo $row['IDPerson']; ?> placeholder="IDPerson" required>
                <input type="text" name = "Nama" id="Nama" value=<?php echo $row['Nama']; ?> placeholder="Nama" required>
                <div class="genderopt">
                    <label for="men">Laki-laki</label> 
                    <input type="radio" name="Gender" value="L" id="men">
                    <label for="women">Perempuan</label>
                    <input type="radio" name="Gender" value="P" id="women">
                </div>
                <input type="text" name="KotaLahir" id="KotaLahir" value=<?php echo $row['KotaLahir']; ?> placeholder="Kota Kelahiran">
                <input type="date" name="TanggalLahir" id="TanggalLahir" value=<?php echo $row['TanggalLahir']; ?> placeholder="Tanggal Lahir">
                <input type="text" name="Alamat" id="Alamat" value=<?php echo $row['Alamat']; ?> placeholder="Alamat">
                <input type="text" name="Kota" id="Kota" value=<?php echo $row['Kota']; ?> placeholder="Kota">
                <button type="submit" name="edit" id="submit">Ubah</button>
            </form>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>