<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="./css/detail.css">
</head>
<body>
    <?php
        if (isset($_GET['detail'])){
            $id = $_GET['detail'];
            $mysqli = new mysqli('', 'nutrienf_tugas2gentur', 'K9tT(c%wt6cA', 'nutrienf_tugas2gentur') or die (mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM person WHERE IDPerson=$id") or die ($mysqli->error);
        }
        ?>
    <h1>Detail Person</h1>
    <div class="back">
        <a class="back-btn" href="index.php">Back<a>
    </div>
    <div class="content">
        <div class="keterangan">
            <label>ID Person</label>
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
            <label>: <?php echo $row['IDPerson']; ?></label>
            <label>: <?php echo $row['Nama']; ?></label>
            <label>: <?php echo $row['Gender']; ?></label>
            <label>: <?php echo $row['KotaLahir']; ?></label>
            <label>: <?php echo $row['TanggalLahir']; ?></label>
            <label>: <?php echo $row['Alamat']; ?></label>
            <label>: <?php echo $row['Kota']; ?></label>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>