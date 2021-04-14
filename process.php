<?php

$mysqli = new mysqli('', 'nutrienf_tugas2gentur', 'K9tT(c%wt6cA', 'nutrienf_tugas2gentur') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
    $IDPerson = $_POST['IDPerson'];
    $Nama = $_POST['Nama'];
    $Gender = $_POST['Gender'];
    $KotaLahir = $_POST['KotaLahir'];
    $TanggalLahir = $_POST['TanggalLahir'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];

    $mysqli->query("INSERT INTO person (
        IDPerson, 
        Nama, 
        Gender, 
        KotaLahir, 
        TanggalLahir, 
        Alamat,
        Kota) VALUES(
            '$IDPerson', 
            '$Nama', 
            '$Gender',
            '$KotaLahir',
            '$TanggalLahir',
            '$Alamat',
            '$Kota')") or die ($mysqli->error);
    
    $_SESSION['message'] = "Record berhasil disimpan!";
    $_SESSION['msg-type'] = "sukses";

    header("location: index.php");
}

if (isset($_POST['edit'])){
    $IDPerson = $_POST['IDPerson'];
    $Nama = $_POST['Nama'];
    $Gender = $_POST['Gender'];
    $KotaLahir = $_POST['KotaLahir'];
    $TanggalLahir = $_POST['TanggalLahir'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];

    $mysqli->query("UPDATE person 
        SET Nama='$Nama', 
        Gender='$Gender', 
        KotaLahir='$KotaLahir',
        TanggalLahir='$TanggalLahir',
        Alamat='$Alamat',
        Kota='$Kota' WHERE IDPerson=$IDPerson") or die ($mysqli->error);
    
    $_SESSION['message'] = "Record berhasil disimpan!";
    $_SESSION['msg-type'] = "sukses";

    header("location: index.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli ->query("DELETE FROM person WHERE IDPerson=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record berhasil dihapus!";
    $_SESSION['msg-type'] = "delete";

    header("location: index.php");
}