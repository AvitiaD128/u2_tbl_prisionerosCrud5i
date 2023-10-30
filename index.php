<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Cereso128</title>
    

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Cereso128</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Regresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Inicie Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah tbl_prisioneros -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">Prisioneros</h3>
                <p class="card-text">A Continuacion Ingrese los datos del preso</p>

                <!-- tampilkan pesan sukses ditambah -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>agregados correctamente</strong> 
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal ditambahkan!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-12">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Damian" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Apellido" class="form-label">Apellido</label>
                        <input type="text" name="Apellido" class="form-control" placeholder="Avitia" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Estado" class="form-label">Estado</label>
                        <select class="form-select" name="Estado" aria-label="Default select example">
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Baja California">Baja California</option>
                            <option value="AguasCalientes">AguasCalientes</option>
                            <option value="Durango">Durango</option>
                            <option value="Guadalajara">Guadalajara</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="tittle" class="form-label">Sexo</label>
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Sexo">Masculino</label>
                                <input class="form-check-input" type="radio" name="Sexo" value="Masculino">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Sexo">Femenino</label>
                                <input class="form-check-input" type="radio" name="Sexo" value="Femenino">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="Fn" class="form-label">Fecha Nacimiento</label>
                        <input type="date" name="Fn" class="form-control" placeholder="00/00/0000" required>
                    </div>
                    <div class="col-md-6">
                        <label for="Direccion" class="form-label">Direccion</label>
                        <input type="text" name="Direccion" class="form-control" placeholder="Calle Durango#432" required>
                    </div>

                    <div class="col-md-6">
                        <label for="MotEnc" class="form-label">Motivo De Encierro</label>
                        <input type="text" name="MotEnc" class=" form-control" placeholder="Asesinato" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2">Tabla Prisiooneros</span></button>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- judul tabel -->
        <h5 class="mb-3">Daftar tbl_prisioneros Saya</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tampilkan Entri</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Cari Sesuatu..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>agregados correctamente</strong> 
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal dihapus!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>agregados correctamente</strong>
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal diupdate!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>No</th>";
            echo "<th scope='col'>Nombre</th>";
            echo "<th scope='col'>Apellido</th>";
            echo "<th scope='col'>Estado</th>";
            echo "<th scope='col'>sexo</th>";
            echo "<th scope='col'>Direccion</th>";
            echo "<th scope='col'>Motivo De Encierro</th>";
            echo "<th scope='col'>Fecha Nacimiento</th>";
            echo "<th scope='col' class='text-center'>Opsi</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM tbl_prisioneros");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM tbl_prisioneros LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;

            // $sql = "SELECT * FROM tbl_prisioneros";
            // $query = mysqli_query($db, $sql);




            while ($tbl_prisioneros = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $tbl_prisioneros['id'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td>" . $tbl_prisioneros['Nombre'] . "</td>";
                echo "<td>" . $tbl_prisioneros['Apellido'] . "</td>";
                echo "<td>" . $tbl_prisioneros['Estado'] . "</td>";
                echo "<td>" . $tbl_prisioneros['Sexo'] . "</td>";
                echo "<td>" . $tbl_prisioneros['Direccion'] . "</td>";
                echo "<td>" . $tbl_prisioneros['MotEnc'] . "</td>";
                echo "<td>" . $tbl_prisioneros['Fn'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>Tidak ada data yang tersedia pada tabel ini</p>";
            } else {
                echo "<p>Total $jumlah_data entri</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Edit Data tbl_prisioneros</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM tbl_prisioneros";
                    $query = mysqli_query($db, $sql);
                    $tbl_prisioneros = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_Nombre" class="form-label">Nombre</label>
                                <input type="text" name="edit_Nombre" id="edit_Nombre" class="form-control" placeholder="Steve Jobs" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_Apellido" class="form-label">Apellido</label>
                                <input type="text" name="edit_Apellido" id="edit_Apellido" class="form-control" placeholder="G64190021" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_Estado" class="form-label">Estado</label>
                                <select class="form-select" name="edit_Estado" id="edit_Estado" aria-label="Default select example">
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Aguas Caliente">Aguas Caliente</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                </select>
                            </div>


                            <div class="col-12 mb-3">
                                <label for="edit_Sexo" class="form-label">Sexo</label>
                                <div class="col-md-12" id="gender">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="edit_Sexo">
                                            <input class="form-check-input" type="radio" name="edit_Sexo" value="Masculino" id="cowok">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="edit_Sexo">
                                            <input class="form-check-input" type="radio" name="edit_Sexo" value="Femenino" id="cewek">Femenino</label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 mb-3">
                                <label for="edit_Direccion" class="form-label">Direccion</label>
                                <input type="text" name="edit_Direccion" class="form-control" id="edit_Direccion" placeholder="Calle Deming360" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_MotEnc" class="form-label">Motivo De Encierro</label>
                                <input type="text" step=0.01 name="edit_MotEnc" id="edit_MotEnc" class=" form-control" placeholder="Asesinato" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_Fn" class="form-label">Fecha Nacimiento</label>
                                <input type="date" step=0.01 name="edit_Fn" id="edit_Fn" class=" form-control" placeholder="00/00/0000" required>
                            </div>

                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Editar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Vaciara La Tabla</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>Estas Seguo?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Confirmar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#edit_Nombre').val(data[2]);
                $('#edit_Apellido').val(data[3]);
                $('#edit_Sexo').val(data[5]);
                if(data[5] == "Masculino") { 
                    $("#cowok").prop("checked", true);
                } else{
                    $("#cewek").prop("checked", true);
                }

                $('#edit_Direccion').val(data[6]);
                $('#edit_Estado').val(data[4]);
                $('#edit_MotEnc').val(data[7]);
                $('#edit_Fn').val(data[8]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>