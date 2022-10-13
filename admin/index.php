<?php

require "../func/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Academy - Challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../../assets/img/isci transparant.png" type="image/x-icon">
</head>

<body>
    <br>
    <br><br>
    <center>
        <a href="add.php" class="btn btn-outline-dark">Add Quiz</a>
    </center>
    <?php
    $tampil = mysqli_query($kon, "SELECT * FROM quiz");
    while ($data = mysqli_fetch_array($tampil)) {
    ?>

        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data["judul"] ?></h5>
                <p class="card-text"><?= $data["deskripsi"] ?></p>
                <p class="text-muted"><?= $data["author"] ?></p>
                <p class="text-muted"><?= $data["waktu"] ?></p>
                <a href="play.php?id=<?= $data["id"] ?>" class="btn btn-primary">Play Quiz <i class="bi bi-eye"></i></a>
                <a href="delete.php?id=<?= $data["id"] ?>" class="btn btn-danger">Delete Quiz <i class="bi bi-eye"></i></a>
                <a href="edit.php?id=<?= $data["id"] ?>" class="btn btn-primary">Edit Quiz <i class="bi bi-eye"></i></a>
            </div>
        </div>

    <?php } ?>
</body>

</html>