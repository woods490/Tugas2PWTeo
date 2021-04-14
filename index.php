<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <?php
        $mysqli = new mysqli('', 'nutrienf_tugas2gentur', 'K9tT(c%wt6cA', 'nutrienf_tugas2gentur') or die (mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM person") or die ($mysqli->error);
        ?>
    <?php
        if(isset($_SESSION['message'])): 
        ?>

    <div class="alert-<?php echo $_SESSION['msg_type']?>">
            <span><?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?></span>
    </div>
    <?php endif; ?>
    <h1>Data Person</h1>
    <hr>
    <div class="tambah">
        <div class="div-tmbh">
            <a class="tmbh-btn" href="add.php">Tambah<a>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>IDPerson</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th colspan="3">Control</th>
            </tr>
        </thead>
        <?php 
            while ($row = $result->fetch_assoc()): ?>
        <tbody>
            <tr>
                <td><?php echo $row['IDPerson']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td>
                    <a href="edit.php?edit=<?php echo $row['IDPerson']; ?>" 
                        class="edit-btn">Edit</a>
                    <a href="detail.php?detail=<?php echo $row['IDPerson']; ?>"
                        class="detail-btn">Detail</a>
                    <a href="process.php?delete=<?php echo $row['IDPerson']; ?>"
                        class="delete-btn">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php endwhile; ?>
    </table>
</body>
</html>