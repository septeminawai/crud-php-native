<?php
//  koneksi ke database
$servename = 'localhost';
$name = 'root';
$password = '';
$db = 'crud-php-native';

$con = mysqli_connect($servename, $name, $password, $db);

$id = $_GET['id'];
// var_dump($id); 

$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($con, $sql);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header class="bg-success">
        <div class="container">
            <h1 class="p-5 fw-bolder text-white">Tanaman Obat</h1>
        </div>
    </header>

    <!-- Data Tanaman -->

    <section>
        <div class="container">

            <!-- Judul / Title -->
            <div class="row">
                <div class="col">
                    <p class="display-3">Detail Tanaman</p>
                </div>
            </div>

            <!-- Tombol Data -->
            <div class="row">
                <div class="col">
                    <a class="btn btn-success rounded-5" href="index.php">Kembali</a>
                </div>
            </div>

            <!-- Daftar Tanaman -->
            <div class="row mt-3 p-3">

                <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!-- Tanaman -->
                    <div class="col">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/plant-white_1308-41021.jpg?w=740&t=st=1684198433~exp=1684199033~hmac=604b1a5e2b84f09c0043cc2df99947c469f10647ee0ebce731379db5088f00b2" class="card-img-top" alt="Gambar Tanaman">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['name'] ?></h5>
                                <p class="card-title"><?= $row['stok'] ?></p>
                                <p class="card title"><?= $row['lokasi'] ?></p>

                                <a href="edit.php" class="btn btn-primary">Edit</a>
                                <a href="delete.php" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>



        </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>