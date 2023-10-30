<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $Nombre = $_POST['edit_Nombre'];
    $Apellido = $_POST['edit_Apellido'];
    $Estado = $_POST['edit_Estado'];
    $Sexo = $_POST['edit_Sexo'];
    $Direccion = $_POST['edit_Direccion'];
    $MotEnc = $_POST['edit_MotEnc'];
    $Fn= $_POST['edit_Fn'];


    // query
    $sql = "UPDATE tbl_prisioneros SET Nombre='$Nombre', Apellido='$Apellido', Estado='$Estado', Sexo='$Sexo', Direccion='$Direccion', MotEnc='$MotEnc',Fn='$Fn ' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
