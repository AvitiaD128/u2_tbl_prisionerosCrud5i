<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Estado = $_POST['Estado'];
    $Sexo = $_POST['Sexo'];
    $Direccion = $_POST['Direccion'];
    $MotEnc = $_POST['MotEnc'];
    $Fn = $_POST['Fn'];

    // query
    $sql = "INSERT INTO tbl_prisioneros(Nombre, Apellido, Estado, Sexo, Direccion, MotEnc, Fn)
    VALUES('$Nombre', '$Apellido', '$Estado', '$Sexo', '$Direccion', '$MotEnc', '$Fn')";
    $query = mysqli_query($db, $sql);
    
    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("El acceso está prohibido...");
